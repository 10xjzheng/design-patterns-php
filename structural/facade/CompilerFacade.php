<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 13:50
 */

namespace designPatterns\structural\facade;


class CompilerFacade implements InterfaceFacade
{
    protected $parser;

    protected $transformer;

    protected $codeGenerator;

    public function __construct()
    {
        $this->parser = new ParserOfSubSystem();

        $this->transformer = new TransformerOfSubSystem();

        $this->codeGenerator = new CodeGeneratorOfSubSystem();
    }

    public function compile($input)
    {

        $ast = $this->parser->getAST($input);


        $newAst = $this->transformer->getTransformedAST($ast);


        return $this->codeGenerator->generateCode($newAst);
    }
}