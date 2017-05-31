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
        $__internal_67102d2e45801410f483d5dfcd66f3887a1dba550bd935db3e6ac7e46d4d9baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67102d2e45801410f483d5dfcd66f3887a1dba550bd935db3e6ac7e46d4d9baf->enter($__internal_67102d2e45801410f483d5dfcd66f3887a1dba550bd935db3e6ac7e46d4d9baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8c4d13d8ea19427df362e6a84ee5b35477357b22a77cf42b3e752ea5713cfb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4d13d8ea19427df362e6a84ee5b35477357b22a77cf42b3e752ea5713cfb5d->enter($__internal_8c4d13d8ea19427df362e6a84ee5b35477357b22a77cf42b3e752ea5713cfb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_67102d2e45801410f483d5dfcd66f3887a1dba550bd935db3e6ac7e46d4d9baf->leave($__internal_67102d2e45801410f483d5dfcd66f3887a1dba550bd935db3e6ac7e46d4d9baf_prof);

        
        $__internal_8c4d13d8ea19427df362e6a84ee5b35477357b22a77cf42b3e752ea5713cfb5d->leave($__internal_8c4d13d8ea19427df362e6a84ee5b35477357b22a77cf42b3e752ea5713cfb5d_prof);

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
