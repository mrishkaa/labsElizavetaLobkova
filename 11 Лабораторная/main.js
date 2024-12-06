const pets = [
	{ name: 'Барсик', color: 'чёрная', eyeColor: 'голубые', age: 3.8 },
	{ name: 'Фунтик', color: 'серая', eyeColor: 'чёрные', age: 4.1 },
];

const woolinfo = prompt('Какой цвет шерсти у Стефани?');
const eyeinfo = prompt('Какой цвет глаз у Стефани?');
const yearsinfo = prompt('Какой возраст у Стефани?');

const Stefanicatage = yearsinfo * 7;
const Barsikage = Math.round(pets[0].age * 7);
const Funtikage = Math.round(pets[1].age * 7);

let candidate;

switch (true) {
	case Stefanicatage > Barsikage:
		candidate = `Барсик подходит Стефани, ему ${Math.round(Barsikage)} лет(чел.). Разница в возрасте: ${Math.round(Stefanicatage - Barsikage)}.`;
		break;
	case Stefanicatage > Funtikage:
		candidate = `Фунтик подходит Стефани, ему ${Math.round(Funtikage)} лет(чел.). Разница в возрасте: ${Math.round(Stefanicatage - Funtikage)}.`;
		break;
	default:
		candidate = 'К сожалению, подходящих кандидатов нет.';
};

document.write(`Есть кандидат! ${candidate}`);
