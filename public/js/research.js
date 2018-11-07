function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}

/////

window.onload = () => {
	document.querySelector('#addContainer').addEventListener('click', () => {
		createResearchBox()
	})
}

function createResearchBox() {
	const container = document.querySelector('#reseach_container')

	const element = document.createElement('tr')
	element.innerHTML = `
	<td>
	<div class="_container">
		<h2 style="font-size: 20px">ข้อมูลผลงานวิจัย</h2>
		<div class="card-content">
			<div class="card-body">
				<p contenteditable="false">ข้อมูล research</p>
			</div>
		</div>
	</div>
</td>

<td>
		<table style="margin-top: 25px">
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #007bff" onclick="editResearch(this)">EDIT</button>
				</th>
			</tr>
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #dc3545" onclick="deleteResearch(this)">DELETE</button>
				</th>
			</tr>
			<tr>
				<th>
					<button type="button" class="button" style="width: 75px;font-size: 14px; background: #28a745" onclick="saveResearch(this)">SAVE</button>
				</th>
			</tr>
		</table>
	</td>
	`
	container.appendChild(element)
}

function editResearch(event) {
	event.parentElements(6).children[0].children[0].children[1].children[0].children[0].contentEditable = true
	// console.log(event.parentElements)
	// console.log(event.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement)
	// console.log(event.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].children[0].children[1])
}

function saveResearch(event) {
	event.parentElements(6).children[0].children[0].children[1].children[0].children[0].contentEditable = false
}

function deleteResearch(event) {
	event.parentElements(6).remove()
}

// Extension

Object.defineProperty(Object.prototype, 'parentElements', {
	enumerable: false,
	configurable: false,
	writable: false, // Set to False
	value: function (times = 1) {
		let _this = this
		for (i = 0; i < times; i++)
			_this = _this.parentElement
		return _this
	}
});