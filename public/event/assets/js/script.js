        document.addEventListener('DOMContentLoaded', function() {
            var dropdown = document.querySelector('.dropdown-toggle');
            if (dropdown) {
                dropdown.addEventListener('click', function(event) {
                    event.preventDefault();
                    var menu = this.nextElementSibling;
                    menu.classList.toggle('show');
                });
            }
        });
