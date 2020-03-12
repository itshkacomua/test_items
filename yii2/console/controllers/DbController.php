<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace console\controllers;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Yii;
use yii\console\Controller;
use yii\db\Exception;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Andrey <master___5@ukr.net>
 * @since 2.0
 */
class DbController extends Controller
{
    public $messages = [
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.',
        'Hello and welcome! I am Olga, you are in good hands now!',
        'Hello! This is Olivia. I know you came to chat with me! I am ready!',
        'Hello! I am Alexa, standing by to get your issues fixed and questions vanished',
        'Hi! Thank you for chatting. This is Mary. I promise to take good care of you!',
        'Greetings! You are chatting with Helen. Please be nice to her.',
        'Hello, I’m awesome. How can I help you?',
    ];
    public $name = [
        'One',
        'Two',
        'Three',
        'Four',
        'Five',
        'Six',
        'Seven',
        'Eight',
        'Nine',
        'Ten',
        'Eleven',
        'Twelve',
        'Thirteen',
        'Fourteen',
        'Fifteen',
        'Sixteen',
        'Seventeen',
        'Eighteen',
        'Nineteen',
        'Twenty',
    ];

    public $playgrounds_name = [
        'Card title 1',
        'Card title 2',
        'Card title 3',
        'Card title 4',
    ];

    public $playgrounds_messages = [
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque. 1',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque. 2',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque. 3',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque. 4',
    ];

    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex()
    {
        $this->actionInstall();
        //self::uninstall();
    }

    public function actionInstall()
    {
        $user_uuid = Uuid::uuid4()->toString();
        echo $this->user($user_uuid);

        $i = 0;
        $imax = count($this->playgrounds_messages);

        while ($i < $imax) {
            try {
                $playgrounds_uuid[$i] = Uuid::uuid4()->toString();

                echo $this->playgrounds($playgrounds_uuid[$i], $i);

                $i++;
            } catch (UnsatisfiedDependencyException $e) {
                echo 'init playgrounds: ' . $e->getMessage() . "\n";
            } catch (\Exception $e) {
                echo 'init playgrounds: ' . $e->getMessage() . "\n";
            }
        }

        $i = 0;
        $imax = $this->messages;

        while ($i < $imax) {
            try {
                $shows_uuid = Uuid::uuid4()->toString();
                $events_uuid = Uuid::uuid4()->toString();
                $play_i = rand(0, count($playgrounds_uuid) - 1);

                echo $this->shows($shows_uuid, $i);
                echo $this->events($events_uuid, $shows_uuid, $playgrounds_uuid[$play_i]);

                $i++;
            } catch (UnsatisfiedDependencyException $e) {
                echo 'init: ' . $e->getMessage() . "\n";
            } catch (\Exception $e) {
            }
        }
    }

    public function actionUninstall()
    {
        try {
            Yii::$app->db->createCommand()
                ->delete('playgrounds')
                ->delete('shows')
                ->delete('events')->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        } catch (\yii\base\Exception $e) {
            echo 'DB/install User hash: ' . $e->getMessage() . "\n";
        }
    }

    public function user($user_uuid)
    {
        try {
            $auth_key = Yii::$app->security->generateRandomString();
            $password_hash = Yii::$app->security->generatePasswordHash('admin321');

            Yii::$app->db->createCommand()->insert('user', [
                'id' => $user_uuid,
                'username' => 'admin',
                'auth_key' => $auth_key,
                'password_hash' => $password_hash,
                'password_reset_token' => $auth_key . '_' . time(),
                'email' => 'admin@gmail.com',
                'status' => 10,
                'created_at' => time(),
                'updated_at' => time(),
                'verification_token' => null,
            ])->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        } catch (\yii\base\Exception $e) {
            echo 'DB/install User hash: ' . $e->getMessage() . "\n";
        }
        return '\n\t add admin';
    }

    public function playgrounds($playgrounds_uuid, $i)
    {
        try {
            Yii::$app->db->createCommand()->insert('playgrounds', [
                'id' => $playgrounds_uuid,
                'name' => 'Project ' . $this->playgrounds_name[$i],
                'picture' => 'ico' . $i . '.jpg',
                'sorting' => $i,
                'description' => $this->playgrounds_messages[$i],
            ])->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
        return '\n\t playgrounds';
    }

    public function shows($shows_uuid, $i)
    {
        try {
            Yii::$app->db->createCommand()->insert('shows', [
                'id' => $shows_uuid,
                'name' => 'Project ' . $this->name[$i],
                'picture' => 'test.jpg',
                'description' => $this->messages[$i],
            ])->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
        return '\n\t shows ';
    }

    public function events($events_uuid, $shows_uuid, $playgrounds_uuid)
    {
        try {
            Yii::$app->db->createCommand()->insert('events', [
                'id' => $events_uuid,
                'date' => date('d.m.Y H:i:s'),
                'shows_id' => $shows_uuid,
                'playgrounds_id' => $playgrounds_uuid,
            ])->execute();
        } catch (Exception $e) {
            echo 'Admin exception: ' . $e->getMessage() . "\n";
        }
        return '\n\t events';
    }
}
