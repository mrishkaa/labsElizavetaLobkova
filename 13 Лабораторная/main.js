const zooland = {
	birds: {
		exoticbirds: ['Волнистые попугаи', 'Карела'],
		homebirds: ['Утки', 'Гуси'],
	},
	wild: {
		reptiles: ['Ящерицы', 'Змеи'],
		amphibians: ['Лягушки', 'Асколотли'],
	},
	fish: {
		big: ['Акула'],
		small: ['Карась', 'Окунь'],
	},
};

function canweeat(customer) {
	let { age, accesstofood } = customer;

	const availableanimals = [];

	switch (true) {
		case age >= 10:
			availableanimals.push(...zooland.birds.homebirds)
		case age >= 11:
			availableanimals.push(...zooland.birds.exoticbirds)
		case age >= 12:
			availableanimals.push(...zooland.fish.small)
		case age >= 13:
			availableanimals.push(...zooland.wild.amphibians)
		case age >= 14:
			availableanimals.push(...zooland.fish.big)
		case age >= 16:
			availableanimals.push(...zooland.wild.reptiles)
		case age >= 17:
			availableanimals.push(...zooland.fish.big)
		case age >= 19:
			availableanimals.push(...zooland.wild.reptiles)
			break
	};

	const availableanimalsList = ['волнистые попугаи','утки','гуси','карась','окунь',];

	if (accesstofood) {
		return availableanimals.filter(animal =>availableanimalsList.includes(animal));
	};

	return availableanimals;
}

const customers = [
	{
		name: prompt('Ваше имя: '),
		surname: prompt('Ваша фамилия: '),
		age: getValidAge(),
		wantsToAccessFood: confirm('Хотите покормить животного?'),
	},
];

function getValidAge() {
	let age;
	do {
		age = parseInt(prompt('Ваш возраст: '), 10)
		if (isNaN(age) || age < 0) {alert('Попробуйте ввести возраст ещё раз.')}
	} while (isNaN(age) || age < 0);
	return age;
};

customers.forEach(customer => {
	const availableanimals = canweeat(customer)
	document.write(`${customer.name}, вам доступны эти представители: ${availableanimals.join(', ')}.`);
});
