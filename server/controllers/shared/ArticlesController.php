<?php
namespace controllers\shared;

require_once 'server/models/entities/Article.php';
require_once 'server/models/entities/Usuari.php';

use Models\Articles;
use controllers\core\BaseTrait;

class ArticlesController
{
    use BaseTrait;
    const PAGE = 1;

    public static function getPaginatedArticles($limit, $filter, $order,$page,$path='/')
    {
        $filter = self::test_input($filter);
        $articles = Articles::getAllArticles($filter, $order);
        $total = $articles['total'];
        $articles = $articles['articles'];
        // var_dump($total);
        $offset= ($page - 1) * $limit;
        $totalpages = ceil($total / $limit);
        $articles = array_slice($articles, $offset, $limit);

        $links = self::createLinks($page, $total, $totalpages,$path);

        $formattedArticles = '';

        foreach ($articles as $article) {
            $formattedArticles .= $article->toGuestString();
        }
        return ['articles' => $formattedArticles, 'links' => $links, 'total' => count($articles)];
    }

    private static function createLinks($page, $total, $totalpages, $path)
    {
        $links = '';
        if ($total == 0) {
            $links .= '<a role="button" aria-label="previous page" class="desactivado button--page"><i class="fi fi-rr-caret-left"></i></a>';
            $links .= '<a role="button" aria-label="next page" class="desactivado button--page button--page--right"><i class="fi fi-rr-caret-right"></i></a>';
            return $links;
        }

        // $page = is_int($page) ? $page : 1;

    
        $url_parts = parse_url(BaseTrait::url($path));
        parse_str($url_parts['query'] ?? '', $params);

        if ($page > 1) {
            $params['page'] = $page - 1;
            $links .= sprintf(
                '<a role="button" href="%s?%s" aria-label="previous page" class="button--page"><i class="fi fi-rr-caret-left"></i></a>',
                BaseTrait::url($path),
                http_build_query($params)
            );
        } else {
            $links .= '<a role="button" aria-label="previous page deactivated" class="desactivado button--page"><i class="fi fi-rr-caret-left"></i></a>';
        }
        
        for ($i = 1; $i <= $totalpages; $i++) {
            if ($i == $page) {
                $links .= sprintf('<a class="num--pages page--active">%d</a>', $i); // Página actual
            } else {
                $query_params['page'] = $i;
                $links .= sprintf(
                    '<a class="num--pages" href="%s?%s">%d</a>',
                    BaseTrait::url($path),
                    http_build_query($query_params),
                    $i
                );
            }
        }

        if ($page < $totalpages) {
            $query_params['page'] = $page + 1;
            $links .= sprintf(
                '<a role="button" aria-label="next page" href="%s?%s" aria-label="next page" class="button--page button--page--right"><i class="fi fi-rr-caret-right"></i></a>',
                BaseTrait::url($path),
                http_build_query($query_params)
            );
        } else {
            $links .= '<a role="button" aria-label="next page deactivated" class="desactivado button--page button--page--right"><i class="fi fi-rr-caret-right"></i></a>';
        }

        return $links;
    }
}
