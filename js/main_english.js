var questions = ["What does your husband do?", "Что такое альтернативный вопрос в английском языке?", "Yesterday I ................. a bird.", "Найдите неправильный глагол: to play, to smile, to laugh, to see.", "При помощи какого суффикса может образовываться наречие в английском языке? От какой части речи?", "Укажите существительное, имеющее неправильную форму множественного числа.", "Найдите ошибку в трѐх формах глагола:", "Выберите наиболее подходящий ответ! 'What is she doing?'", "Как совершается действие, выраженное глаголом в Present Continuous?", "Karina never minds ................. the movie again.", "I couldn’t help ................. .", "Можно мне взять Ваш карандаш?", "Марта никогда не слышала, как он говорит по-английски.", "Я знаю его четыре года.", "В каком из представленных ниже слов звук, который передаѐтся буквой «a», отличается от остальных:", " I have ................. butter, please, buy some.", "The taxi ................. by 7 o’clock yesterday.", "Должно быть, он продал свою машину.", "Я хочу, чтобы погода была хорошая.", "Какой же он умный мальчик!", "Find the incorrect sentence.", "Какое из перечисленных ниже предложений нельзя перевести на русский язык как «Я читаю»?", "When Kate ................. at Pier 90, it was crowded with football fans.", "There was no one to cheer him ................. .", "Could you possibly give me ................. ?", "Marvin asked me ................. .", "The accident happened ................. our way home.", "If he were not so absent-minded, he ................. you for your sister (yesterday).", "If Mike lived in the country house, he ................. happier.", " ................. that wierd man sitting over there?", "How long ................. his house?", "Ron has made up his ................. to become a teacher.", " If Deborah ................. to dinner tomorrow, I'll be happy.", "Ask somebody for ................. occupation.", "Kids shouldn't take those pills, and ................. .", "The doctor ................. me that there would be no pain.", "I am looking for an ................. method of heating.", "We try to be ................. to the needs of the customer.", "An obstetrician/gynecologist at the pre-conception clinic suggests we ................. some further tests.", "This particular college has a very selective ................. policy."];
var number1 = ["He is feeding the dog.", "Вопрос, требующий ответа «Да» или «Нет».", "saw", "to play", "При помощи суффикса «-ly» от глаголов.", "lady", "teach – taught – taught", "She is playing with the bunny.", "Действие, выраженное глаголом в Present Continuous, во всех случаях совершается постоянно или регулярно в настоящем времени.", "to watch", "for laughing", "Can I take your pencil?", "Martha never heard him spoke English.", "I know him four years.", "map", "little", "has arrived", "It must be that he has sold his car", "I want that the weather will be fine.", "What an intelligent boy is he!", "Though it was nine o’clock in the evening, there were not many people in the bar.", "I read magazines every day.", "achieved", "on", "a advice", "what was my favourite vegetable", "in", "would not mistake", "was", "Which", "has Mr Johnson had", "brains", "will come", "his", "neither should she", "sured", "economics", "responsible", "doing", "acceptance"];
var number2 = ["He is a doctor.", "Специальный вопрос к любому члену предложения.", "sawed", "to smile", "При помощи суффикса «-ly» от прилагательных.", "gentleman", "catch – caught – caught", "She is a manager.", "Действие совершается всегда в будущем времени", "to be watched", "and laughed", "Must I take your pencil?", "Martha never heard him to speak English.", "I have been knowing him for four years", "tape", "many", "had arrived", "He must sold his car", "I want the weather to be fine.", "What the intelligent boy is he!", "Although it is nine o’clock in the evening, there are not many people in the restaurant.", "I am reading a book.", "arrived", "in", "an advice", "what my favourite vegetable was", "on", "would not have mistaken", "is", "Whose", "does Mr Johnson have", "decision", "comes", "her", "neither she should", "insured", "economy", "responsive", "to do", "entrance"];
var number3 = ["Yes, he does.", "Вопрос, предполагающий выбор между двумя качествами, предметами или действиями.", "see", "to laugh", "При помощи суффикса «-ed» от существительных.", "son", "bring – braught – braught", "She cleans the house every day.", "Действие совершается в данный момент, или момент речи в настоящем времени.", "watch", "laughing", "Should I take your pencil?", "Martha has never heard him speak English", "I know him for four years.", "age", "few", "arrived", "He should have solden his car.", "I want the weather be fine.", "What an intelligent boy he is!", "It was only nine o’clock in the morning, and there were too many people in the café.", "I have been reading the magazine for two hours.", "entered", "up", "some advices", "what is my favourite vegetable", "for", "would not have been mistaken", "will be", "Who's", "had Mr Johnson had", "head", "came", "their", "she did either", "reassured", "economic", "respondent", "are doing", "admissions"];
var number4 = ["Yes, he is.", "Вопрос, являющийся уточнением какого-либо утверждения.", "seed", "to see", "При помощи суффикса «-ing» от прилагательных.", "daughter", "seek – sought – sought", "She is clean the carpet.", "Действие уже совершено, и в предложении подчеркивается результат такого действия.", "watching", "to laughed", "May I take your pencil?", "Martha never heard how he speaks English.", "I have known him for four years.", "make", "a few", "is arrived", "He must have sold his car", "I want the weather being fine.", "What the intelligent boy he is!", "Through it was eight o’clock in the morning, there weren’t many people in the pub.", "Все варианты подходят", "reached", "over", "a piece of advice", "what about my favourite vegetable", "about", "did not mistake", "would be", "Who", "has Mr Johnson been having", "mind", "was coming", "its", "either shouldn't she", "ensured", "economical", "response", "should do", "admittance"];
var answer = [1, 2, 0, 3, 1, 1, 2, 0, 2, 3, 2, 3, 2, 3, 0, 0, 1, 3, 1, 2, 3, 3, 1, 2, 3, 1, 1, 1, 3, 2, 0, 3, 1, 2, 0, 2, 3, 1, 3, 2];
var countQuest = 0;
var plus = 0;
var store = 0;
var test_start = 0;
window.onload = function() {
    check(4);
    initializeTimer();
}

function check(num) {
    if (num == 4) {
        document.getElementById('area').style.display = 'block';
        document.getElementById('start').style.display = 'none';
        document.getElementById('end').style.display = 'none';
        if (test_start == 0) {
            document.getElementById('question').innerHTML = questions[countQuest];
            document.getElementById('option1').innerHTML = number1[countQuest];
            document.getElementById('option2').innerHTML = number2[countQuest];
            document.getElementById('option3').innerHTML = number3[countQuest];
            document.getElementById('option4').innerHTML = number4[countQuest];
            document.getElementById('ask-count-curent').innerHTML = "1";
            document.getElementById('ask-count-total').innerHTML = questions.length;
            test_start = 1;
        }
    } else {
        if (num == answer[countQuest]) plus++;
        if (questions.length - 1 > countQuest) {
            countQuest++;
            document.getElementById('ask-count-curent').innerHTML = countQuest + 1;
            document.getElementById('ask-count-total').innerHTML = questions.length;
            document.getElementById('question').innerHTML = questions[countQuest];
            document.getElementById('option1').innerHTML = number1[countQuest];
            document.getElementById('option2').innerHTML = number2[countQuest];
            document.getElementById('option3').innerHTML = number3[countQuest];
            document.getElementById('option4').innerHTML = number4[countQuest];
        } else {
            document.getElementById('result-title').innerHTML = ("Тест окончен");
            document.getElementById('area').style.display = 'none';
            document.getElementById('end').style.display = 'flex';
            document.getElementById('result-block').style.display = 'block';
            if (plus <= 8) {
                document.getElementById('result').innerHTML = "Beginner (начальный уровень)";
            }
            if (plus >= 9 && plus <= 14) {
                document.getElementById('result').innerHTML = "Elementary (базовый уровень)";
            }
            if (plus >= 15 && plus <= 22) {
                document.getElementById('result').innerHTML = "Pre-intermediate (ниже среднего)";
            }
            if (plus >= 23 && plus <= 30) {
                document.getElementById('result').innerHTML = "Intermediate (средний)";
            }
            if (plus >= 31 && plus <= 35) {
                document.getElementById('result').innerHTML = "– Upper-intermediate (выше среднего)";
            }
            if (plus >= 36 && plus <= 40) {
                document.getElementById('result').innerHTML = "Advanced (продвинутый)";
            }
            document.getElementById('result-countQuest').innerHTML = plus;
            clearInterval(timerId);
        }
    }
}

function initializeTimer() {
    var seconds = 1800;
    if (seconds > 0) {
        var minutes = seconds / 60;
        var hours = minutes / 60;
        minutes = (hours - Math.floor(hours)) * 60;
        hours = Math.floor(hours);
        seconds = Math.floor((minutes - Math.floor(minutes)) * 60);
        minutes = Math.floor(minutes);
        setTimePage(minutes, seconds);

        function secOut() {
            if (seconds == 0) {
                if (minutes == 0) {
                    if (hours == 0) {
                        showMessage(timerId);
                    } else {
                        hours--;
                        minutes = 59;
                        seconds = 59;
                    }
                } else {
                    minutes--;
                    seconds = 59;
                }
            } else {
                seconds--;
            }
            setTimePage(minutes, seconds);
        }
        timerId = setInterval(secOut, 1000)
    } else {}
}

function setTimePage(m, s) {
    if (s < 10) {
        var element = document.getElementById("timer");
        element.innerHTML = "<div class='test-timer'><span>" + m + "</span>:0" + s + "</div>";
    } else {
        var element = document.getElementById("timer");
        element.innerHTML = "<div class='test-timer'><span>" + m + "</span>:" + s + "</div>";
    }
}

function showMessage(timerId) {
    clearInterval(timerId);
    document.getElementById('result-title').innerHTML = ("Время вышло!");
    document.getElementById('area').style.display = 'none';
    document.getElementById('start').style.display = 'none';
    document.getElementById('end').style.display = 'flex';
    document.getElementById('result-block').style.display = 'block';
    if (plus < 2) {
        document.getElementById('result').innerHTML = "Уровень 1";
    }
    if (plus >= 2 && plus < 4) {
        document.getElementById('result').innerHTML = "Уровень 2";
    }
    if (plus >= 4 && plus < 6) {
        document.getElementById('result').innerHTML = "Уровень 3";
    }
    if (plus >= 6 && plus <= 8) {
        document.getElementById('result').innerHTML = "Уровень 4";
    }
    document.getElementById('result-countQuest').innerHTML = countQuest;
}