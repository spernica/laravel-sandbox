<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Mesour\Bridges\Nette\Laravel\ApplicationManager;
use Mesour\DataGrid\Sources\ArrayGridSource;
use Mesour\UI\DataGrid;

class HomepageController extends Controller
{

    private $templateVars = [];

    public function __construct(ApplicationManager $applicationManager)
    {
        $app = $applicationManager->getApplication();

        //todo: move to component
        $grid = new DataGrid('test');

        $data = [
            ['id' => '1', 'action' => '0', 'group_id' => '1', 'name' => 'Peter', 'surname' => NULL, 'email' => 'john.doe@test.xx', 'last_login' => '2014-09-01 06:27:32', 'amount' => '1561.456542', 'avatar' => 'avatar/01.png', 'sort' => '100', 'timestamp' => '1418255325'],
            ['id' => '2', 'action' => '1', 'group_id' => '2', 'name' => 'John', 'surname' => 'Doe', 'email' => 'peter.larson@test.xx', 'last_login' => '2014-09-09 13:37:32', 'amount' => '15220.654', 'avatar' => 'avatar/02.png', 'sort' => '160', 'timestamp' => '1418255330'],
            ['id' => '3', 'action' => '1', 'group_id' => '2', 'name' => 'Claude', 'surname' => 'Graves', 'email' => 'claude.graves@test.xx', 'last_login' => '2014-09-02 14:17:32', 'amount' => '9876.465498', 'avatar' => 'avatar/03.png', 'sort' => '180', 'timestamp' => '1418255311'],
            ['id' => '4', 'action' => '0', 'group_id' => '3', 'name' => 'Stuart', 'surname' => 'Norman', 'email' => 'stuart.norman@test.xx', 'last_login' => '2014-09-09 18:39:18', 'amount' => '98766.2131', 'avatar' => 'avatar/04.png', 'sort' => '120', 'timestamp' => '1418255328'],
            ['id' => '5', 'action' => '1', 'group_id' => '1', 'name' => 'Kathy', 'surname' => 'Arnold', 'email' => 'kathy.arnold@test.xx', 'last_login' => '2014-09-07 10:24:07', 'amount' => '456.987', 'avatar' => 'avatar/05.png', 'sort' => '140', 'timestamp' => '1418155313'],
            ['id' => '6', 'action' => '0', 'group_id' => '3', 'name' => 'Jan', 'surname' => 'Wilson', 'email' => 'jan.wilson@test.xx', 'last_login' => '2014-09-03 13:15:22', 'amount' => '123', 'avatar' => 'avatar/06.png', 'sort' => '150', 'timestamp' => '1418255318'],
            ['id' => '7', 'action' => '0', 'group_id' => '1', 'name' => 'Alberta', 'surname' => 'Erickson', 'email' => 'alberta.erickson@test.xx', 'last_login' => '2014-08-06 13:37:17', 'amount' => '98753.654', 'avatar' => 'avatar/07.png', 'sort' => '110', 'timestamp' => '1418255327'],
            ['id' => '8', 'action' => '1', 'group_id' => '3', 'name' => 'Ada', 'surname' => 'Wells', 'email' => 'ada.wells@test.xx', 'last_login' => '2014-08-12 11:25:16', 'amount' => '852.3654', 'avatar' => 'avatar/08.png', 'sort' => '70', 'timestamp' => '1418255332'],
            ['id' => '9', 'action' => '0', 'group_id' => '2', 'name' => 'Ethel', 'surname' => 'Figueroa', 'email' => 'ethel.figueroa@test.xx', 'last_login' => '2014-09-05 10:23:26', 'amount' => '45695.986', 'avatar' => 'avatar/09.png', 'sort' => '20', 'timestamp' => '1418255305'],
            ['id' => '10', 'action' => '1', 'group_id' => '3', 'name' => 'Ian', 'surname' => 'Goodwin', 'email' => 'ian.goodwin@test.xx', 'last_login' => '2014-09-04 12:26:19', 'amount' => '1236.9852', 'avatar' => 'avatar/10.png', 'sort' => '130', 'timestamp' => '1418255331'],
            ['id' => '11', 'action' => '1', 'group_id' => '2', 'name' => 'Francis', 'surname' => 'Hayes', 'email' => 'francis.hayes@test.xx', 'last_login' => '2014-09-03 10:16:17', 'amount' => '5498.345', 'avatar' => 'avatar/11.png', 'sort' => '0', 'timestamp' => '1418255293'],
            ['id' => '12', 'action' => '0', 'group_id' => '1', 'name' => 'Erma', 'surname' => 'Burns', 'email' => 'erma.burns@test.xx', 'last_login' => '2014-07-02 15:42:15', 'amount' => '63287.9852', 'avatar' => 'avatar/12.png', 'sort' => '60', 'timestamp' => '1418255316'],
            ['id' => '13', 'action' => '1', 'group_id' => '3', 'name' => 'Kristina', 'surname' => 'Jenkins', 'email' => 'kristina.jenkins@test.xx', 'last_login' => '2014-08-20 14:39:43', 'amount' => '74523.96549', 'avatar' => 'avatar/13.png', 'sort' => '40', 'timestamp' => '1418255334'],
            ['id' => '14', 'action' => '0', 'group_id' => '3', 'name' => 'Virgil', 'surname' => 'Hunt', 'email' => 'virgil.hunt@test.xx', 'last_login' => '2014-08-12 16:09:38', 'amount' => '65654.6549', 'avatar' => 'avatar/14.png', 'sort' => '30', 'timestamp' => '1418255276'],
            ['id' => '15', 'action' => '1', 'group_id' => '1', 'name' => 'Max', 'surname' => 'Martin', 'email' => 'max.martin@test.xx', 'last_login' => '2014-09-01 12:14:20', 'amount' => '541236.5495', 'avatar' => 'avatar/15.png', 'sort' => '170', 'timestamp' => '1418255317'],
            ['id' => '16', 'action' => '1', 'group_id' => '2', 'name' => 'Melody', 'surname' => 'Manning', 'email' => 'melody.manning@test.xx', 'last_login' => '2014-09-02 12:26:20', 'amount' => '9871.216', 'avatar' => 'avatar/16.png', 'sort' => '50', 'timestamp' => '1418255281'],
            ['id' => '17', 'action' => '1', 'group_id' => '3', 'name' => 'Catherine', 'surname' => 'Todd', 'email' => 'catherine.todd@test.xx', 'last_login' => '2014-06-11 15:14:39', 'amount' => '100.2', 'avatar' => 'avatar/17.png', 'sort' => '10', 'timestamp' => '1418255313'],
            ['id' => '18', 'action' => '0', 'group_id' => '1', 'name' => 'Douglas', 'surname' => 'Stanley', 'email' => 'douglas.stanley@test.xx', 'last_login' => '2014-04-16 15:22:18', 'amount' => '900', 'avatar' => 'avatar/18.png', 'sort' => '90', 'timestamp' => '1418255332'],
            ['id' => '19', 'action' => '0', 'group_id' => '3', 'name' => 'Patti', 'surname' => 'Diaz', 'email' => 'patti.diaz@test.xx', 'last_login' => '2014-09-11 12:17:16', 'amount' => '1500', 'avatar' => 'avatar/19.png', 'sort' => '80', 'timestamp' => '1418255275'],
            ['id' => '20', 'action' => '0', 'group_id' => '3', 'name' => 'John', 'surname' => 'Petterson', 'email' => 'john.petterson@test.xx', 'last_login' => '2014-10-10 10:10:10', 'amount' => '2500', 'avatar' => 'avatar/20.png', 'sort' => '190', 'timestamp' => '1418255275']
        ];

        $groups = [
            ['id' => '2', 'name' => 'Group 2'],
            ['id' => '1', 'name' => 'Group 1'],
            ['id' => '3', 'name' => 'Group 3'],
        ];

        $source = new ArrayGridSource($data, [
            'group' => $groups
        ]);

        $source->join('group', 'group_id', 'name', 'group_name');

        $grid->setSource($source);

        $grid->getSource()->setPrimaryKey('id');

        $app->addComponent($grid);

        $wrapper = $grid->getWrapperPrototype();

        $wrapper->class('my-class');

        // TRUE = append
        $wrapper->class('my-next-class', true);

        $grid->enablePager(8);

        $grid->enableFilter();

        $selection = $grid->enableRowSelection();

        $selectionLinks = $selection->getLinks();

        $selectionLinks->addHeader('Active');

        $selectionLinks->addLink('Active')
            ->onCall[] = function () {
            dump('ActivateSelected', func_get_args());
        };

        $selectionLinks->addLink('Unactive')
            ->setAjax(false)
            ->onCall[] = function () {
            dump('InactivateSelected', func_get_args());
        };

        $selectionLinks->addDivider();

        $selectionLinks->addLink('Delete')
            ->setConfirm('Really delete all selected users?')
            ->onCall[] = function () {
            dump('DeleteSelected', func_get_args());
        };

        $grid->enableSortable('sort');

        $grid->enableEditable();

        $grid->enableExport(__DIR__ . '/../../../../storage/framework/cache');

        $status = $grid->addStatus('action', 'S');
        $status->addButton('active')
            ->setStatus(1, 'Active', 'All active')
            ->setIcon('check-circle-o')
            ->setType('success')
            ->setAttribute('href', $status->link('/toActive', [
                'id' => '{id}',
            ]));
        $status->addButton('unactive')
            ->setStatus(0, 'Unactive', 'All unactive')
            ->setIcon('times-circle-o')
            ->setType('danger')
            ->setAttribute('href', $status->link('/toUnactive', [
                'id' => '{id}',
            ]));
        $grid->addImage('avatar', 'Avatar')
            ->setPreviewPath('preview', __DIR__ . '/../../../../public', __DIR__ . '/../../../../public/')
            ->setMaxHeight(60)
            ->setMaxWidth(60);

        $grid->addText('name', 'Name');

        $grid->addText('email', 'E-mail');

        $grid->addText('group_name', 'Group');

        $grid->addNumber('amount', 'Amount')
            ->setUnit('CZK');

        $container = $grid->addContainer('test_container', 'Actions');
        $button = $container->addButton('test_button');
        $button->setIcon('pencil')
            ->setType('primary')
            ->setAttribute('title', 'Edit')
            ->setAttribute('href', $button->link('edit!', [
                'id' => '{id}',
            ]));

        $dropDown = $container->addDropDown('test_drop_down')
            ->setPullRight()
            ->setAttribute('class', 'dropdown');

        $dropDown->addHeader('Test header');
        $first = $dropDown->addButton();
        $first->setText('First button')
            ->setAttribute('href', $dropDown->link('/someAction', [
                'id' => '{id}',
            ]));

        $dropDown->addDivider();
        $dropDown->addHeader('Test header 2');
        $dropDown->addButton()
            ->setText('Second button')
            ->setConfirm('Test confirm :-)')
            ->setAttribute('href', $dropDown->link('/someAction', [
                'id' => '{id}',
            ]));

        $dropDown->addButton()
            ->setText('Third button')
            ->setAttribute('href', $dropDown->link('/someAction', [
                'id' => '{id}',
            ]));

        $mainButton = $dropDown->getMainButton();
        $mainButton->setText('Actions')
            ->setType('danger');

        $this->templateVars['grid'] = $grid->create();

    }

    public function actionDefault()
    {
        return view('welcome', $this->templateVars);
    }

}
