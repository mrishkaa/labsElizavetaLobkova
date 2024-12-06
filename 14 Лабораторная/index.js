const naturalobject = {
	season: 'Зима', time: 'Вечер',
}
const familyobject = [{
	dad: {
		name: 'Сережа', age: 42, season: 'Осень',
	},
	mother: {
		name: 'Людмила', age: 40, season: 'Лето',
	},
	child: {
		name: 'Оксана', age: 19, season: 'Зима',
	},	
	pet: {
		type: 'Черепаха', name: 'Сладусик', age: 3,
	}
}]

function status(naturalobject, familyobject) {
	const members = familyobject[0];
	const actions = {
	  Весна: (name) => document.write(`${name} гуляет с другом<br>`),
	  Осень: (name) => document.write(`${name} смотрит фильм<br>`),
	  Лето: (name) => document.write(`${name} загорает<br>`),
	  Зима: (name) => document.write(`${name} лепит снеговика<br>`),
	};
  
	for (const key in members) {
	  const human = members[key];
	  if (key === 'pet') continue;
	  if (human.season === naturalobject.season) {
		if (naturalobject.time === 'Обед' || naturalobject.time === 'Вечер') {
			actions[naturalobject.season](human.name);
		}
	}
	}
  
	const pet = members.pet;
  
	switch (pet.type) {
	case 'Собака':
		if (naturalobject.time === 'Утро') {
			if (members.child.age < 18) {
				document.write('Собаку выгуливает папа<br>');
			} else {
				document.write('Собаку выгуливает ребёнок<br>');
			}
		}
		break;
	  case 'Кошка':
		if (naturalobject.time === 'Ночь') {
			document.write('Кошка ловит мышей<br>');
		}
		break;
	  default:
		document.write(`Питомец - имя: "${pet.name}", что за питомец: "${pet.type}", возраст: "${pet.age}"<br>`);
		break;
	}
  }
  
  status(naturalobject, familyobject);