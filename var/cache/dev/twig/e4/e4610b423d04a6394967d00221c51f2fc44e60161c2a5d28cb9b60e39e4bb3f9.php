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
        $__internal_8ccf336f9dd72826437b990fc9e89fda72d5402244b4e3e2aa9f5ae4473871dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccf336f9dd72826437b990fc9e89fda72d5402244b4e3e2aa9f5ae4473871dc->enter($__internal_8ccf336f9dd72826437b990fc9e89fda72d5402244b4e3e2aa9f5ae4473871dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3c8f44d262d340c6613e1bc08a6680d3e8f65caae17ebd33e4af79d95cf325e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8f44d262d340c6613e1bc08a6680d3e8f65caae17ebd33e4af79d95cf325e3->enter($__internal_3c8f44d262d340c6613e1bc08a6680d3e8f65caae17ebd33e4af79d95cf325e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8ccf336f9dd72826437b990fc9e89fda72d5402244b4e3e2aa9f5ae4473871dc->leave($__internal_8ccf336f9dd72826437b990fc9e89fda72d5402244b4e3e2aa9f5ae4473871dc_prof);

        
        $__internal_3c8f44d262d340c6613e1bc08a6680d3e8f65caae17ebd33e4af79d95cf325e3->leave($__internal_3c8f44d262d340c6613e1bc08a6680d3e8f65caae17ebd33e4af79d95cf325e3_prof);

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
