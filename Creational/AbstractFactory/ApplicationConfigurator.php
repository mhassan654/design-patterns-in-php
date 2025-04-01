<?php

class ApplicationConfigurator
{
    /**
     * @throws Exception
     */
    public function main():GUIFactory
    {
        $platform = strtolower(PHP_OS_FAMILY); // returns 'windows','darwin'

        if ($platform === 'windows'){
            $factory = new WinFactory();
        }elseif ($platform ==='darwin'){
            $factory = new MacFactory();
          var_dump($factory->createButton());
        }else{
            throw new \RuntimeException("Error! unknown operating system.".PHP_OS_FAMILY);
        }
        return $factory;

    }

}



