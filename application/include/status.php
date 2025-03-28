<?php
/**
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright    Copyright (c) 2019 - 2024, MasterkinG32. (https://masterking32.com)
 * @link    https://masterking32.com
 **/

class status
{
    public static function get_character_by_guid($realmID, $guid)
    {
        if (!empty($guid)) {
            $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
            $queryBuilder->select("name, race, class, gender, level")
                ->from("characters")
                ->where("guid = :guid")
                ->setParameter("guid", $guid);

            $statement = $queryBuilder->executeQuery();
            $datas = $statement->fetchAllAssociative();

            if (!empty($datas[0]["level"])) {
                return $datas[0];
            }
        }
        return false;
    }

    public static function get_top_achievements($realmID)
    {
        $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
        $queryBuilder->select("guid, COUNT(*) as total")
            ->from("character_achievement")
            ->groupBy("guid")
            ->orderBy("total", "DESC")
            ->setMaxResults(10);

        $statement = $queryBuilder->executeQuery();
        $datas = $statement->fetchAllAssociative();

        if (!empty($datas[0]["guid"])) {
            return $datas;
        }
        return false;
    }

    public static function get_top_arenateams($realm_id)
    {
    // Retornar um array vazio, já que não há suporte para arena teams no Vanilla
    return [];
    }

    /*
    public static function get_top_arenateams($realmID)
    {
        $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
        $queryBuilder->select("arenaTeamId, name, captainGuid, rating")
            ->from("arena_team")
            ->orderBy("rating", "DESC")
            ->setMaxResults(10);

        $statement = $queryBuilder->executeQuery();
        $datas = $statement->fetchAllAssociative();

        if (!empty($datas[0]["arenaTeamId"])) {
            return $datas;
        }
        return false;
    }*/

    public static function get_top_killers($realm_id)
    {
    $database = database::$chars[$realm_id];
    $query = $database->createQueryBuilder();
    
    // Usar honor_last_week_hk + honor_stored_hk como totalKills
    $query->select('name, race, class, gender, level, (honor_last_week_hk + honor_stored_hk) as totalKills')
        ->from('characters')
        ->orderBy('totalKills', 'DESC')
        ->setMaxResults(10);
    
    $result = $query->executeQuery();
    
    return $result->fetchAllAssociative();
    }

    public static function get_top_arenapoints($realm_id)
    {
    // Retornar um array vazio, já que não há suporte para arena points no Vanilla
    return [];
    }


 #   public static function get_top_arenapoints($realmID)
 #   {
 #       $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
 #       $queryBuilder->select("name, race, class, gender, level, arenaPoints")
 #           ->from("characters")
 #           ->orderBy("arenaPoints", "DESC")
 #           ->setMaxResults(10);
 #       $statement = $queryBuilder->executeQuery();
 #       $datas = $statement->fetchAllAssociative();

 #       if (!empty($datas[0]["arenaPoints"])) {
 #           return $datas;
 #       }
 #       return false;
 #   }

    public static function get_top_honorpoints($realm_id)
    {
    $database = database::$chars[$realm_id];
    $query = $database->createQueryBuilder();
    
    // Usar honor_rank_points como totalHonorPoints
    $query->select('name, race, class, gender, level, honor_rank_points as totalHonorPoints')
        ->from('characters')
        ->orderBy('honor_rank_points', 'DESC')
        ->setMaxResults(10);
    
    $result = $query->executeQuery();
    
    return $result->fetchAllAssociative();
    }


    public static function get_top_playtime($realmID)
    {
        $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
        $queryBuilder->select("name, race, class, gender, level, played_time_total")
            ->from("characters")
            ->orderBy("played_time_total", "DESC")
            ->setMaxResults(10);

        $statement = $queryBuilder->executeQuery();
        $datas = $statement->fetchAllAssociative();

        if (!empty($datas[0]["played_time_total"])) {
            return $datas;
        }
        return false;
    }

    public static function get_top_gold($realmID)
    {
        $queryBuilder = database::$chars[$realmID]->createQueryBuilder();
        $queryBuilder->select("name, race, level, played_time_total, money")
            ->from("characters")
            ->orderBy("money", "DESC")
            ->setMaxResults(10);

        $statement = $queryBuilder->executeQuery();
        $datas = $statement->fetchAllAssociative();

        if (!empty($datas[0]["money"])) {
            return $datas;
        }
        return false;
    }
}
