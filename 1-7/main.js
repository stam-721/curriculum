class Taiyaki {
    constructor(bean, cream, cheese) {
        this.bean = bean;
        this.cream = cream;
        this.cheese = cheese;
        
    }
    main() {
        console.log(`中身は${this.bean}です`);
        console.log(`中身は${this.cream}です`);
        console.log(`中身は${this.cheese}です`);
    }
}
let food = new Taiyaki('あんこ', 'クリーム', 'チーズ');
food.main();