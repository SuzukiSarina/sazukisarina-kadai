const quiz = [
  {
    question: '漫画ジョジョの奇妙な冒険、第三部に出てくる主人公の名前は次のうちどれ？',
    answers: [
      '空条承太郎',
      '東方仗助',
      'ジョセフ・ジョースター',
      'ジョナサン・ジョースター'
    ],
    correct: '空条承太郎'
  }, {
    question: '空条承太郎のスタンド名は、次のうちどれ？',
    answers: [
      'ストーン・フリー',
      'ゴールド・エクスペリエンス',
      'クレイジー・ダイヤモンド',
      'スタープラチナ'
    ],
    correct: 'スタープラチナ'
  }, {
    question: '空条承太郎の娘の名前は、次のうちどれ？',
    answers: [
      '空条序倫',
      '空条徐倫',
      '空条除倫',
      '空条助倫'
    ],
    correct: '空条徐倫'
  }
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

const setupQuiz = () => {
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while (buttonIndex < buttonLength) {
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}
setupQuiz();

const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解！');
    score++;
  } else {
    window.alert('不正解！');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    setupQuiz();
  } else {
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');
  }

};

let handlerIndex = 0;
while (handlerIndex < buttonLength) {
  $button[handlerIndex].addEventListener('click', (e) =>{
    clickHandler(e);
  });  
  handlerIndex++;
}