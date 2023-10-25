import Datepicker from 'flowbite-datepicker/Datepicker';

const datepickerEl = document.getElementById('company_founded');
new Datepicker(datepickerEl, {
    autohide: true,
    format: "yyyy-mm-dd"
}); 