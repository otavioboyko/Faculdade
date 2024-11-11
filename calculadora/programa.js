const display = document.querySelector(".display");

        function calcular(input) {
            display.value += input;
        }

        function apagar() {
            display.value = '';
        }

        function igual() {
            let displayValue = display.value;
            try {
                if (displayValue.includes('%')) {
                    let [num, percent] = displayValue.split('%');
                    num = parseFloat(num.trim());
                    percent = parseFloat(percent.trim());

                    if (!isNaN(num) && !isNaN(percent)) {
                        display.value = (num * percent) / 100;
                    } else {
                        display.value = 'Erro';
                    }
                } else {
                    display.value = eval(displayValue);
                }
            } catch (e) {
                display.value = 'Erro';
            }
        }