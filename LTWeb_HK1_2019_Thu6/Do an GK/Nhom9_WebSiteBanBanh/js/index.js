window.onload = function() {
    importDataToLocalStorage(bakeries);
}

function importDataToLocalStorage(bakeries) {
    if (bakeries) {
        localStorage.setItem('bakeries', JSON.stringify(bakeries));
    }   
}

