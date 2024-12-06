function collectFriendData() {
	const friendData = {};
	friendData.name = prompt('Введите имя вашего друга:');
	friendData.color = prompt(`Введите его(её) любимый цвет:`);
	friendData.food = prompt(`Введите его(её) любимую еду:`);
	friendData.season = prompt(`Введите его(её) любимое время года:`);
	friendData.drink = prompt(`Введите его(её) любимый напиток:`);
	friendData.animal = prompt(`Введите его(её) любимое животное:`);
	
	return friendData;
  }
  
  function collectMyData() {
	const myData = {};
	myData.name = prompt('Введите ваше имя:');
	myData.color = prompt('Введите ваш любимый цвет:');
	myData.food = prompt('Введите вашу любимую еду:');
	myData.season = prompt('Введите ваше любимое время года:');
	myData.drink = prompt('Введите ваш любимый напиток:');
	myData.animal = prompt('Введите ваше любимое животное:');
	
	return myData;
  }
  
  function evaluateMatches(friendData, myData) {
	let compatibilityScore = 0;
	let friendCorrect = 0;
	let myCorrect = 0;
  
	// Вопрос с  цветом
	if (friendData.color === myData.color) {
	  compatibilityScore += 20;
	}
	const friendColorAnswer = prompt(`Какой его(её) любимый цвет?`);
	if (friendColorAnswer === friendData.color) {
	  friendCorrect++;
	}
	const myColorAnswer = prompt(`Какой ваш любимый цвет?`);
	if (myColorAnswer === myData.color) {
	  myCorrect++;
	}
	// Вопрос с едой
	if (friendData.food === myData.food) {
	  compatibilityScore += 20;
	}
	const friendFoodAnswer = prompt(`Какое его(Её) любимое блюдо?`);
	if (friendFoodAnswer === friendData.food) {
	  friendCorrect++;
	}
	const myFoodAnswer = prompt(`Какое ваше любимое блюдо?`);
	if (myFoodAnswer === myData.food) {
	  myCorrect++;
	}
	// Вопрос с временем года
	if (friendData.season === myData.season) {
	  compatibilityScore += 20;
	}
	const friendSeasonAnswer = prompt(`Какое его(её) любимое время года?`);
	if (friendSeasonAnswer === friendData.season) {
	  friendCorrect++;
	}
	const mySeasonAnswer = prompt(`Какое ваше любимое время года?`);
	if (mySeasonAnswer === myData.season) {
	  myCorrect++;
	}
	// Вопрос с напитком
	if (friendData.drink === myData.drink) {
	  compatibilityScore += 20;
	}
	const friendDrinkAnswer = prompt(`Какой его(её) любимый напиток?`);
	if (friendDrinkAnswer === friendData.drink) {
	  friendCorrect++;
	}
	const myDrinkAnswer = prompt(`Какой ваш любимый напиток?`);
	if (myDrinkAnswer === myData.drink) {
	  myCorrect++;
	}
	// Вопрос с животным
	if (friendData.animal === myData.animal) {
	  compatibilityScore += 20;
	}
	const friendAnimalAnswer = prompt(`Какое его(её) любимое животное?`);
	if (friendAnimalAnswer === friendData.animal) {
	  friendCorrect++;
	}
	const myAnimalAnswer = prompt(`Какое ваше любимое животное?`);
	if (myAnimalAnswer === myData.animal) {
	  myCorrect++;
	}
	return { compatibilityScore, friendCorrect, myCorrect };
  }
  
  const friendInfo = collectFriendData();
  const myInfo = collectMyData();
  const results = evaluateMatches(friendInfo, myInfo);
  
  document.write(`Ваша совместимость составляет: ${results.compatibilityScore}%<br>`);
  
  let outcomeMessage;
  switch (true) {
	case results.friendCorrect > results.myCorrect:
	  outcomeMessage = 'Ваш друг победил<br>';
	  break;
	case results.myCorrect > results.friendCorrect:
	  outcomeMessage = 'Вы победили<br>';
	  break;
	default:
	  outcomeMessage = 'Ничья<br>';
  }
  
document.write(outcomeMessage);