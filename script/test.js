const form = document.querySelector('#form');
const fullName = document.querySelector('#name');
const lastName = document.querySelector('#lastname');
const birthDate = document.querySelector('#birthdate');
const phone = document.querySelector('#phone');
const position = () => {
    let positions = document.getElementsByName('position');
    let result = '';
    for (let i = 0; i < positions.length; i++) {
        if (positions[i].checked) {
            result += positions[i].value + ' ';
        }
    }
    console.log(result);
    return result;
}
const formData = new FormData();
const file = document.getElementById('file').files[0];
formData.append('file', file);
let data;

form.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log(formData);
    data = {
        firstName: fullName.value,
        lastName: lastName.value,
        birthDate: birthDate.value,
        phone: phone.value,
        position: position(),
        file: formData
    }
    console.log(data.file);
    // postData(data);
});

function postData(data) {
    fetch('../career.php', {
        method: 'POST',
        mode: 'no-cors',
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(json => console.log(json))
}