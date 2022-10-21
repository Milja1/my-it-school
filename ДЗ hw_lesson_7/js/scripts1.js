let Contacts = function(){
    this.get = function(){
        alert('Для продолжения сотрудничества введите Ваши данные. Помните: мы не сотрудничаем с лицами моложе 18 лет');
        this.name = prompt('Имя', 'Иван');
		this.surname = prompt('Фамилия', 'Петров');
		this.phone = prompt('Телефон для связи', '+375(29)222-22-22');
        this.email = prompt('Адрес электронной почты', 'info@gmail.com');
        this.age = +prompt('Сколько Вам лет (данные должным быть целым неотрицательным числом).');
	this.ageVerification();
    }
    this.ageVerification = function(){
        if (Number.isInteger(this.age) !== true || this.age < 0)  {
            alert('Вы ввели не правильное значение. Повторите попытку');
            this.get();
            return 0;
        } else if (this.age < 18 ) {
            alert('Мы не сотрудничаем с лицами моложе 18 лет');
            this.get();
            return 0;
        } else {
            alert(`Уважаемый ${this.surname} ${this.name}, мы рады Вас приветствовать.`)
            alert(`Проверьте Ваши контактные данные: телефон - ${this.phone}, адрес электронной почты - ${this.email}`)
        }  
    this.dataOutput();
    }
    this.dataOutput = function(){
        document.write(`Имя: ${this.name}<br>Фамилия: ${this.surname}<br>Контактные данные:<br>телефон - ${this.phone}<br>адрес электронной почты - ${this.email}<br><br>`)
    }
}
let cont1 = new Contacts
cont1.get();
console.log(cont1);
let cont2 = new Contacts
cont2.get();
console.log(cont2);
let cont3 = new Contacts
cont3.get();
console.log(cont3);