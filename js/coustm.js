// header


document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.sticky-header');
    const searchInput = document.querySelector('#searchInput');
    let lastScrollTop = 0;
  
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  
      if (currentScroll > lastScrollTop) {
        // Scroll down
        header.classList.add('hidden');
        searchInput.classList.remove('visible');
        searchInput.classList.add('hidden');
      } else {
        // Scroll up
        header.classList.remove('hidden');
        searchInput.classList.remove('hidden');
        searchInput.classList.add('visible');
      }
      lastScrollTop = currentScroll => 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });
  });
  



// scroll




   document.addEventListener('DOMContentLoaded', (event) => {
    const openModalButton = document.getElementById('openModalButton');
    const  BACILLIbutton = document.getElementById('BACILLIbutton');
    const  tshbuttonopen = document.getElementById('tshbuttonopen');
    const  amylaseopenbutton = document.getElementById('amylaseopenbutton');
    const  hivopenbutton = document.getElementById('hivopenbutton');
    const  triple_marker = document.getElementById('triple_marker');
    const modal = document.getElementById('myModal');
    const amylase = document.getElementById('amylase');
    const tshModal = document.getElementById('tshModal');
    const closehivButton = document.getElementById('hiv');
    const closeamylaseButton = document.getElementById('amylase');
    const closetmButton = document.getElementById('triplemodal');
    const closeModalButton = document.getElementById('closeModalButton');
    const closetshButton = document.getElementById('closetshButton');
    const submitButton = document.getElementById('submitButton');

    // Open the modal with zoom animation
    openModalButton.addEventListener('click', () => {
        modal.style.display = 'block';
        setTimeout(() => {
            modal.classList.add('show');
        }, 10); // Small delay to trigger transition
    });

    BACILLIbutton.addEventListener('click', () => {
        modal.style.display = 'block';
        setTimeout(() => {
            modal.classList.add('show');
        }, 10); // Small delay to trigger transition
    });

    tshbuttonopen.addEventListener('click', () => {
        tshModal.style.display = 'block';
        setTimeout(() => {
            tshModal.classList.add('show');
        }, 10); // Small delay to trigger transition
    });

    amylaseopenbutton.addEventListener('click', () => {
        amylase.style.display = 'block';
        setTimeout(() => {
            amylase.classList.add('show');
        }, 10); // Small delay to trigger transition 
    });

    hivopenbutton.addEventListener('click', () => {
        hiv.style.display = 'block';
        setTimeout(() => {
            hiv.classList.add('show');
        }, 10); // Small delay to trigger transition triple_marker
    });

    triple_marker.addEventListener('click', () => {
        triplemodal.style.display = 'block';
        setTimeout(() => {
            triplemodal.classList.add('show');
        }, 10); // Small delay to trigger transition 
    });

    // Close the modal with zoom animation
    closeModalButton.addEventListener('click', () => {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300); // Match the duration of the transition
    });

      // Close the modal with zoom animation
      closetshButton.addEventListener('click', () => {
        tshModal.classList.remove('show');
        setTimeout(() => {
            tshModal.style.display = 'none';
        }, 300); // Match the duration of the transition
    });

     // Close the modal with zoom animation
     closeamylaseButton.addEventListener('click', () => {
        amylase.classList.remove('show');
        setTimeout(() => {
            amylase.style.display = 'none';
        }, 300); // Match the duration of the transition 
    });

     // Close the modal with zoom animation
     closehivButton.addEventListener('click', () => {
        hiv.classList.remove('show');
        setTimeout(() => {
            hiv.style.display = 'none';
        }, 300); // Match the duration of the transition 
    });

     // Close the modal with zoom animation
     closetmButton.addEventListener('click', () => {
        triplemodal.classList.remove('show');
        setTimeout(() => {
            triplemodal.style.display = 'none';
        }, 300); // Match the duration of the transition 
    });

    // Handle form submission
    submitButton.addEventListener('click', () => {
        const inputField = document.getElementById('inputField').value;
        alert(`Form submitted with value: ${inputField}`);
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300); // Match the duration of the transition
    });

    // Close the modal if the user clicks anywhere outside the modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300); // Match the duration of the transition tshModal
        }
    });

    // Close the modal if the user clicks anywhere outside the modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            tshModal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300); // Match the duration of the transition 
        }
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            amylase.classList.remove('show');
            setTimeout(() => {
                amylase.style.display = 'none';
            }, 300); // Match the duration of the transition
        }
    });
});


// pagination use

const pages = document.querySelectorAll('.page');
        const pageButtons = document.querySelectorAll('.pagination button');
        let currentPage = 0;

        function showPage(index) {
            pages.forEach((page, i) => {
                page.style.display = (i === index) ? 'block' : 'none';
            });
            pageButtons.forEach((button, i) => {
                button.classList.toggle('active', i === index + 1);
            });
        }

        document.getElementById('prevPage').addEventListener('click', () => {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });

        document.getElementById('nextPage').addEventListener('click', () => {
            if (currentPage < pages.length - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });

        pageButtons.forEach((button, i) => {
            if (i > 0 && i < pageButtons.length - 1) {
                button.addEventListener('click', () => {
                    currentPage = i - 1;
                    showPage(currentPage);
                });
            }
        });

        showPage(currentPage); // Show the first page initially

// end pagination

$(document).ready(function() {
    // Hide all sections initially except the first one
    $('.all-test-1 > div').hide();
    $('.populer-packages').show();

    // Click event for buttons
    $('.toggale-button button').on('click', function() {
        // Get the ID of the clicked button
        var id = $(this).attr('id');
        
        // Hide all sections
        $('.all-test-1 > div').hide();
        
        // Show the section that matches the button's ID
        if ($('#' + id).length) {
            $('.' + id).show();
        }
    });
});


  


   

    document.querySelectorAll('.toggale-button .btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get the target collapse element from data-target attribute
            const target = document.querySelector(this.getAttribute('data-target'));

            // Toggle the collapse state
            if (target.classList.contains('show')) {
                target.classList.remove('show');
                target.style.display = 'none';
            } else {
                target.classList.add('show');
                target.style.display = 'block';
            }
        });
    });
