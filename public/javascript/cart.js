
let dataPro = JSON.parse(localStorage.getItem('product'));

function showData() {
    let table = '';
    for (let i = 0; i < dataPro.length; i++) {
        table += `
        <tr>
            <td><img width=200px src="${dataPro[i].imgCard}" alt="" ></td>
            <td>${dataPro[i].category}</td>
            <td>${dataPro[i].product}</td>
            <td>${dataPro[i].price}</td>
            <td>${dataPro[i].numberInput}</td>
            <td><button onclick="deleteData(${i})" id="delete">delete</button></td>
        </tr>
        `;
    }
    document.getElementById('tbody').innerHTML = table;
}
// function update(id) {
showData();

// }
function deleteData(id) {
    dataPro.splice(id, 1);
    // localStorage.product = JSON.stringify(dataPro)
    localStorage.setItem('product', JSON.stringify(dataPro));
    location.reload();
    showData();
}
let product = dataPro.map(product => product.id);
let form = document.querySelector('form');
let input = '';
for (let i = 0; i < dataPro.length; i++) {

    input += `
                <input type="text" name="product${i}" id="product${i}" hidden>
                <input type="text" name="number${i}" id="number${i}" hidden>
                
`;
}

form.innerHTML = input + `
                <div class="btnOrder"><button type="submit" class="btnMake">Make Order</button></div>
`
let inputValue = document.querySelectorAll('input');

for (let i = 0; i < dataPro.length; i++) {
    document.querySelector('#product' + String(i)).value = dataPro[i].id;
    document.querySelector('#number' + String(i)).value = dataPro[i].numberInput;
}
for (let i = 0; i < dataPro.length; i++) {
    console.log(document.querySelector('#product' + String(i)).value);
}