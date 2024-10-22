document.getElementById('select-all').onclick = function() {
    var checkboxes = document.getElementsByName('select[]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
}