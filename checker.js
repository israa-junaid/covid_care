const correctAnswers = ['yes','yes','yes','yes','yes','yes'  ] ;
const form = document.querySelector('.quiz-form');

form.addEventListener('submit', e =>{

    e.preventDefault();


    let score=0;
    const userAnswers = [form.q1.value, form.q2.value,form.q3.value,form.q4.value,form.q5.value,form.q6.value ] ;
     
    //check Answers
    userAnswers.forEach((answer , index) =>{
        if(answer === correctAnswers[index]){
           score += 25;
        } 

    });

    console.log (score);
    if (score == 0)
    {
        alert ("You are Healthy")
        
    }

    else if ( score == 25)
    {
        alert ("You may be stressed,get some rest.")
    }

    else if (score == 50)
    {
    alert ("Dail 1166 healthcare helpline and tell your symptoms")
    }

    else if ( score == 75)
    {
        alert ("Isolate Yourself and dail 1166 healthcare helpline")
    }
    else if ( score == 100)
    {
        alert ("Get Yourself Tested immediately")
    }

    else if ( score == 125)
    {
        alert ("Please see a doctor immediately.Do not panic,isolate yourself from friends and family.")
    }
});