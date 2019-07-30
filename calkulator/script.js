$(document).ready(function () {

    // константы
    var calc = $('.calculator');
    var calcDisplay = calc.find('.calculator_display');
    var calcKeys = calc.find('.calculator_key');
    var calcButton = calc.find('.calculator_button');
    var calcClear = calc.find('.calculator_clear');
    var calcEqual = calc.find('.calculator_key--equal');
    var calcSpace = calc.find('.calculator_backspace');

    // цифры и значения для калькулятора
    calcKeys.each(function () {
        var current = $(this).attr('value'); // each - вызывает заданую функцию для каждого елемента набора
        $(this).text(current);
    });

    // вводит данные
    calcButton.on('click', function () {
        calcDisplay.val( calcDisplay.val() + $(this).attr('value') ); //attr - возвращает/изменяет (в зависимости от числа параметров) значение атрибута у элементов на странице, val - возвращает/изменяет (в зависимости от числа параметров) значение атрибута value у элементов на странице
    });

    // очистка поля
    calcClear.on('click', function () {
        calcDisplay.val('');
    });

    // результат
    calcEqual.on('click', function () {
        calcDisplay.val( eval( calcDisplay.val() ) ); //Функция eval позволяет выполнить код, переданный ей в виде строки. Этот код будет выполнен в текущей области видимости.
    });

      // удаление одного символа
    calcSpace.on('click', function () { 
        calcDisplay.val( calcDisplay.val().substring(0, calcDisplay.val().length-1) );
    });

});

console.log(calcEqual);
