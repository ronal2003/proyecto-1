// generateCalendar(): Genera el cuerpo del calendario basado en los días del mes de julio de 2024.
// toggleAllMonth(checkbox): Marca o desmarca todos los checkbox del mes y actualiza los checkbox de los encabezados.
// toggleWeekday(weekday, checkbox): Marca o desmarca todos los checkbox de un día específico de la semana y actualiza el estado del checkbox general.
// toggleDay(dayCheckbox): Marca o desmarca los checkbox de un día específico y actualiza los checkbox de los encabezados y el checkbox general.
// checkWeekday(weekday): Verifica si todos los días de un día de la semana están marcados para actualizar el checkbox del encabezado correspondiente.
// checkAllMonth(): Verifica si todos los días del mes están marcados para actualizar el checkbox general.

const daysInMonth = 31; // Días en julio
const firstDayOfWeek = 1; // Julio 1, 2024 es un lunes (0=domingo, 1=lunes, etc.)
const weekdays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

function generateCalendar() {
    const tbody = document.getElementById('calendar-body');
    tbody.innerHTML = '';

    let currentDay = 1;
    let currentWeekday = firstDayOfWeek;

    while (currentDay <= daysInMonth) {
        const tr = document.createElement('tr');

        for (let i = 0; i < 7; i++) {
            if ((currentDay === 1 && i < firstDayOfWeek) || currentDay > daysInMonth) {
                tr.innerHTML += '<td></td>';
            } else {
                tr.innerHTML += `
                    <td class="checkbox-cell">
                        <div class="day-number">${currentDay}</div>
                        <input type="checkbox" class="select-weekday ${weekdays[i]}" data-day="${currentDay}" onchange="toggleDay(${currentDay})">
                        <div class="pt">Ppto día: <input type="text" value="0.00"></div>
                    </td>`;
                currentDay++;
            }
        }
        currentWeekday = (currentWeekday + 7) % 7;
        tbody.appendChild(tr);
    }
}

function toggleAllMonth(checkbox) {
    const isChecked = checkbox.checked;
    document.querySelectorAll('.select-weekday').forEach(cb => {
        cb.checked = isChecked;
    });
    weekdays.forEach(day => {
        document.getElementById(`select-${day}`).checked = isChecked;
    });
}

function toggleWeekday(weekday, checkbox) {
    const isChecked = checkbox.checked;
    document.querySelectorAll(`.select-weekday.${weekday}`).forEach(cb => {
        cb.checked = isChecked;
    });
    checkAllMonth();
}

function toggleDay(day) {
    const isChecked = document.querySelector(`.select-weekday[data-day="${day}"]`).checked;

    if (!isChecked) {
        document.getElementById('select-all-month').checked = false;
    }

    weekdays.forEach(weekday => {
        const allChecked = Array.from(document.querySelectorAll(`.select-weekday.${weekday}`)).every(cb => cb.checked);
        document.getElementById(`select-${weekday}`).checked = allChecked;
    });

    checkAllMonth();
}

function checkAllMonth() {
    const allChecked = Array.from(document.querySelectorAll('.select-weekday')).every(cb => cb.checked);
    document.getElementById('select-all-month').checked = allChecked;
}

generateCalendar();