<?php

namespace Bolt\Storage\Query;

use Bolt\Storage\Entity\Content;

class Query
{
    /** @var ContentQueryParser */
    protected $parser;
    /** @var array */
    protected $scopes;

    /**
     * Constructor.
     *
     * @param ContentQueryParser $parser
     */
    public function __construct(ContentQueryParser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param string              $name
     * @param QueryScopeInterface $scope
     */
    public function addScope($name, QueryScopeInterface $scope)
    {
        $this->scopes[$name] = $scope;
    }

    /**
     * @param string $name
     *
     * @return QueryScopeInterface|null
     */
    public function getScope($name)
    {
        if (array_key_exists($name, $this->scopes)) {
            return $this->scopes[$name];
        }

        return null;
    }

    /**
     * getContent based on a 'human readable query'.
     *
     * Used by the twig command {% setcontent %} but also directly.
     * For reference refer to @link https://docs.bolt.cm/templating/content-fetching
     *
     * @param string       $textQuery
     * @param array|string $parameters
     *
     * @return QueryResultset|Content|null
     */
    public function getContent($textQuery, array $parameters = [])
    {
        $this->parser->setQuery($textQuery);
        $this->parser->setParameters($parameters);

        return $this->parser->fetch();
    }

    /**
     * @param string $scopeName
     * @param string $textquery
     * @param array  $parameters
     *
     * @return QueryResultset|null
     */
    public function getContentByScope($scopeName, $textquery, $parameters = [])
    {
        if ($scope = $this->getScope($scopeName)) {
            $this->parser->setQuery($textquery);
            $this->parser->setParameters($parameters);
            $this->parser->setScope($scope);

            return $this->parser->fetch();
        }

        return null;
    }
}
