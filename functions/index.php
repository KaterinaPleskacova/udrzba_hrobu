<?php

declare(strict_types=1);

function addition(int $a, int $b): int
{
    return $a + $b;
}

function subtraction(int $a, int $b = 1): int
{
    return $a - $b;
}

function randomName(): string
{
    $names = ["Petr", "Ondra", "Kuba", "Matěj"];

    return $names[rand(0, 3)];
}

function writeName(string $name): void
{
    echo $name;
}

function endProgram(): never
{
//    die("Ukončeno");
    exit();
}

//Chceme funkci vždycky říct, jaký datový typ má čekat
//První způsob předání zpětného volání a vyvolání akce - prvni druh funkcí vyššího řádu
function funcWithCallback(callable $callback): void
{
    echo "test";
    //výpočet                   //funkce (pojmenovaný kus kódu, který se dá znovu použít) funcWithCallback očekává něco,
    //...                       // co je callable, něco co může provést - dosadíme tam jinou funkci, která se má provést

    $callback();
}

//Druhý způsob předání zpětného volání a vyvolání akce
function funcWithCallbackTwo(Closure $callback): void
{

    //práce s DB
    call_user_func($callback);
}

function helloWorld(): void
{
    echo "<br /> Hello World!!";
};

//Druhý druh funkcí vyššího řádu - funkce, které vrací funkci (jejich návratová hodnota je jiná funkce)
/**
 * @return Closure - funkce, která očekává jeden argument typu string
 */
function higherOrderReturn(): Closure
{
    return Closure::fromCallable(
        function (string $message) {
       echo "<br /><b>$message</b><br />";
    });
}

echo addition(5, 9);

echo "<br />", subtraction(5);
echo "<br />", subtraction(5, 3);

echo "<br />", randomName(), "<br />";

writeName(randomName());

echo "<br /><br />";

funcWithCallback("helloWorld");          //jakmile jsme předali callable funkci, tak se nespustila samotná funkce uložená
                                        //v proměnné $helloWorld, ale ukázali jsme na ní, aby si to funkce funcWithCallback
                                        //mohla vzít, provést nějaký výpočet a až je výpočet hotový, zavolala to zpětné volání
                                        // a až když se dostane k místu, kde voláme $callback dostane, provede se funkce uložená
                                        //v proměnné $helloWorld

funcWithCallbackTwo(Closure::fromCallable("helloWorld"));

$function = higherOrderReturn();

$function("Testování");


endProgram();

echo "Kód, ke kterému se nikdy nedostaneme.";