class User{
    userId;
    name;
    nickname;
    email;
    password;
    type;

    kanjiLvl;
    grammarLvl;
    vocabLvl;

    constructor(userId, name, email, password, type){
        this.userId = userId;
        this.name = name;
        this.nickname = name;
        this.email = email;
        this.password = password;
        this.type = type;

        this.setUserLvls();
    }

    //This method sets the levels of kanji, grammar and vocabulary when the user es created depending
    //on the user's type (admin or user)
    setUserLvls(){
        if(this.type === 'Admin'){
            this.kanjiLvl = 999;
            this.grammarLvl = 999;
            this.vocabLvl = 999;
        } else {
            this.kanjiLvl = 1;
            this.grammarLvl = 1;
            this.vocabLvl = 1;
        }
    }

}