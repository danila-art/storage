<?php
class Model_Portfolio extends Model
{
    public function get_Data()
    {
      return array(
          array(
              'Year' => '2012',
              'Site' => 'http://DunkerBeel.ru',
              'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Lowent'
          ),
          array(
              'Year' => '2012',
              'Site' => 'http://ZopoMobile.ru',
              'Description' => 'Русскоязычный каталог китайских телефонов zopo'
          ),
          //todo
      );
    }

}
