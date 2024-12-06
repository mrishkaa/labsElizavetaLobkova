const names = ['Наташа', 'Витя', 'Света', 'Катя']
const motorcycles = [
	['Giant', 'розовый', 25690, 'Rub', 'Россия'],
	['TREK', 'синий', 12000, 'Dollar', 'США'],
	['Merida', 'зелёный', 15684, 'Euro', 'Германия'],
	['CUBE', 'чёрный', 96300, 'Rub', 'Россия'],
]

const money = {
	dollar: 100,
	euro: 109,
}

const moneytorubles = []

for (let i = 0; i < motorcycles.length; i++) {
	const price = motorcycles[i][2]
	const currency = motorcycles[i][3]

	if (currency === 'Rub') {
		moneytorubles.push(price)
	} else if (currency === 'Dollar') {
		moneytorubles.push(price * money.dollar)
	} else if (currency === 'Euro') {
		moneytorubles.push(price * money.euro)
	}
}

const maxmoney = Math.max(...moneytorubles)

if (maxmoney === moneytorubles[0]) {
	document.write(`Килограмм конфет получила ${names[0]}`)
} else if (maxmoney === moneytorubles[1]) {
	document.write(`Килограмм конфет получила ${names[1]}`)
} else if (maxmoney === moneytorubles[2]) {
	document.write(`Килограмм конфет получила ${names[2]}`)
} else if (maxmoney === moneytorubles[3]) {
	document.write(`Килограмм конфет получила ${names[3]}`)
}
