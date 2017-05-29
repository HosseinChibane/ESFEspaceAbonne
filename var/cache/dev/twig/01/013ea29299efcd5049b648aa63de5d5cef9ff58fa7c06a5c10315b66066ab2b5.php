<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_45ed57ece6dda4662c82e4d0bcdc6e7077528714c13763c00fd0c59e374e7484 extends Twig_Template
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
        $__internal_ba2c979a9ea35cbea32df7e88b42d8f50f28f23452122af34ae960bc83bc2e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2c979a9ea35cbea32df7e88b42d8f50f28f23452122af34ae960bc83bc2e7a->enter($__internal_ba2c979a9ea35cbea32df7e88b42d8f50f28f23452122af34ae960bc83bc2e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_587c2ea2c9668f31920755c847fa7b9e534ac480e6fec41830da7361e12d881d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587c2ea2c9668f31920755c847fa7b9e534ac480e6fec41830da7361e12d881d->enter($__internal_587c2ea2c9668f31920755c847fa7b9e534ac480e6fec41830da7361e12d881d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ba2c979a9ea35cbea32df7e88b42d8f50f28f23452122af34ae960bc83bc2e7a->leave($__internal_ba2c979a9ea35cbea32df7e88b42d8f50f28f23452122af34ae960bc83bc2e7a_prof);

        
        $__internal_587c2ea2c9668f31920755c847fa7b9e534ac480e6fec41830da7361e12d881d->leave($__internal_587c2ea2c9668f31920755c847fa7b9e534ac480e6fec41830da7361e12d881d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
