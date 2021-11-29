const {Builder, By, Key, until} = require('selenium-webdriver');
require("chromedriver");

  async function testeForm(){  

    let driver = await new Builder().forBrowser("chrome").build();

    await driver.get("https://cefetfriburgo.github.io/Treinamento/");
    await driver.findElement(By.id("inputNome")).click();
    await driver.findElement(By.id("inputNome")).sendKeys("Thiago").then(function(){
        driver.sleep(2000);
    });
    await driver.findElement(By.id("inputSobre")).click();
    await driver.findElement(By.id("inputSobre")).sendKeys("Durso");
    await driver.findElement(By.id("inputEmail")).click();
    await driver.findElement(By.id("inputEmail")).sendKeys("Thiago.Durso@hotmail.com");
    await driver.findElement(By.css("input:nth-child(7)")).click();
    await driver.findElement(By.css("h1:nth-child(2)")).click();
}
async function testePaginas(){
    let driver = await new Builder().forBrowser("chrome").build();
    await driver.findElement(By.linkText("Gastronomia")).click();
}
testeForm();
testePaginas();