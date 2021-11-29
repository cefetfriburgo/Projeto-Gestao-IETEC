const {Builder, By, Key, until} = require('selenium-webdriver');
require("chromedriver");

/* Gastronomia */


async function gastronomiaTest(){  

    let driver = await new Builder().forBrowser('chrome').build();

    await driver.get("https://cefetfriburgo.github.io/Treinamento/")
    await driver.manage().window().setRect({ width: 1366, height: 728 })
    //driver.wait(until.elementsLocated(By.linkText('alert-sucess')), 10000);
    await driver.findElement(By.css("a:nth-child(2) h1")).click()
    //driver.wait(until.elementsLocated(By.linkText('alert-sucess')), 10000);
    await driver.findElement(By.css(".bg-white > h1")).click()
    await driver.quit();
    

}

gastronomiaTest();

/*



async function formTest(){  

  let driver = await new Builder().forBrowser('chrome').build();

    await driver.get("https://cefetfriburgo.github.io/Treinamento/")
    await driver.manage().window().setRect({ width: 1366, height: 728 })
    await driver.findElement(By.id("inputNome")).click()
    await driver.findElement(By.id("inputNome")).sendKeys("filipe")
    await driver.findElement(By.id("inputSobre")).click()
    await driver.findElement(By.id("inputSobre")).click()
    await driver.findElement(By.id("inputSobre")).sendKeys("quintanilha")
    await driver.findElement(By.id("inputEmail")).click()
    await driver.findElement(By.id("inputEmail")).sendKeys("abc@123.com")
    await driver.findElement(By.css("input:nth-child(7)")).click()
    await driver.findElement(By.css("h1:nth-child(2)")).click()
    await driver.close();
    

}

formTest();




async function esporteTest(){  

  let driver = await new Builder().forBrowser('chrome').build();

  await driver.get("https://cefetfriburgo.github.io/Treinamento/")
  await driver.manage().window().setRect({ width: 1366, height: 728 })
  await driver.findElement(By.css("a:nth-child(3) h1")).click()
  await driver.close();
  

}

esporteTest();




  async function culturaTest(){  

    let driver = await new Builder().forBrowser('chrome').build();
    
    await driver.get("https://cefetfriburgo.github.io/Treinamento/")
    await driver.manage().window().setRect({ width: 1366, height: 728 })
    await driver.findElement(By.css("a:nth-child(4) h1")).click()
    await driver.close();
    
}

culturaTest();

*/