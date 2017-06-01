<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e6e8091bba912366f030f697d06ff553777f4ffe90895133c26589023dad29d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ce1065c72030444da8cd11690a17bc04432d47c54ca45d796dd5e056d12b8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce1065c72030444da8cd11690a17bc04432d47c54ca45d796dd5e056d12b8ab->enter($__internal_3ce1065c72030444da8cd11690a17bc04432d47c54ca45d796dd5e056d12b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_93705dd82d3f51a340fd09d79870cdb580db3c96f36d5eecaf411953c93d5709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93705dd82d3f51a340fd09d79870cdb580db3c96f36d5eecaf411953c93d5709->enter($__internal_93705dd82d3f51a340fd09d79870cdb580db3c96f36d5eecaf411953c93d5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3ce1065c72030444da8cd11690a17bc04432d47c54ca45d796dd5e056d12b8ab->leave($__internal_3ce1065c72030444da8cd11690a17bc04432d47c54ca45d796dd5e056d12b8ab_prof);

        
        $__internal_93705dd82d3f51a340fd09d79870cdb580db3c96f36d5eecaf411953c93d5709->leave($__internal_93705dd82d3f51a340fd09d79870cdb580db3c96f36d5eecaf411953c93d5709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
