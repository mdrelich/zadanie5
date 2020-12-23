<?php

require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl
{

    private $msgs;
    private $form;
    private $result;

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct()
    {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams()
    {
        $this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
        $this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
        $this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
    }

    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku
     */
    public function validate()
    {
        if (!(isset ($this->form->x) && isset ($this->form->y) && isset ($this->form->z))) {
            return false;
        }

        if ($this->form->x == null) {
            $this->msgs->addError('Nie podano kwoty');
        }

        if ($this->form->y == null) {
            $this->msgs->addError('Nie podano lat kredytu');
        }

        if ($this->form->z == null) {
            $this->msgs->addError('Nie podano oprocentowania');
        }

        return !$this->msgs->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process()
    {

        $this->getparams();

        if ($this->validate()) {
            $this->result->result = ($this->form->x + (($this->form->x / 100)*$this->form->z)) / ($this->form->y *12);

            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView()
    {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Maciej Drelich');
        $smarty->assign('page_description', 'Kalkulator kredytowy');
        $smarty->assign('page_header', ':)');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path . '/app/CalcView.html');
    }
}