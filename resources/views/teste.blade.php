            $promocaos = promocao::find(1);
            foreach ($promocaos->marca as $marca)
            {
                echo $marca->nome;
            }
