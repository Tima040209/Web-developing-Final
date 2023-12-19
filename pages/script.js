document.addEventListener('DOMContentLoaded', function () {
    var profileButton = document.querySelector('._2n3lE');
    var profileMenu = document.querySelector('._17CQk');

    profileButton.addEventListener('click', function () {
        // Переключаем видимость меню
        
        if (profileMenu.style.display === 'none') {
            profileMenu.style.display = 'block';
        } else {
            profileMenu.style.display = 'none';
        }
    });

    // Закрываем меню, если пользователь кликает вне него
    document.addEventListener('click', function (event) {
        if (!profileMenu.contains(event.target) && event.target !== profileButton) {
            profileMenu.style.display = 'none';
        }
    });
});
function openPopup(product_id) {
    document.getElementById('ticketIdInput').value =product_id;
    document.getElementById('buyPopup').style.display = 'block';
}

function closePopup() {
    document.getElementById('buyPopup').style.display = 'none';
}
