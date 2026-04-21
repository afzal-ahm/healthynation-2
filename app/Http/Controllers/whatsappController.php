<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Twilio\Rest\Client;

class whatsappController extends Controller
{
    public function sendWhatsAppMessage(Request $request){
        $request->validate([
            'name'=>'required|string',
            'number'=>'required|string',
            'address'=>'required|string',
            'time_schedule'=>'required|string',
        ]);

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $twilioNumber = env('TWILIO_WHATSAPP_NUMBER');

        $client = new Client($sid, $token);

        $message = "Name: " . $request->input('name'). "\n" .
                   "Number: " . $request->input('number'). "\n" .
                   "Address: " . $request->input('address'). "\n" .
                   "Time Schedule: " . $request->input('time_schedule');

                   try{
                    // Send the message via WhatsApp
                    $client->messages->create("whatsapp:" . $request->input('number'), [
                        'from' => "whatsapp:$twilioNumber",
                        'body' => $message
                    ]);
                    
                    return redirect()->back()->with('success', 'Message sent successfully!');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Failed to send message: ' . $e->getMessage());
                }
    }
}
