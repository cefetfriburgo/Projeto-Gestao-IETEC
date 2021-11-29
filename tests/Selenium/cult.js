const {Builder, By, Key, until} = require('selenium-webdriver');
require("chromedriver");

async function culturaTest(){  

    let driver = await new Builder().forBrowser('chrome').build();
    
    await driver.get("https://cefetfriburgo.github.io/Treinamento/")
    await driver.manage().window().setRect({ width: 1366, height: 728 })
    await driver.findElement(By.css("a:nth-child(4) h1")).click()
    await driver.close();
    
}

culturaTest();