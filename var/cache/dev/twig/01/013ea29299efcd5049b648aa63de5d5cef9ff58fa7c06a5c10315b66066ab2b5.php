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
        $__internal_fe5ace3793cfd03f1823a77e7a45b4e07351f8977916a66a1932b465f6cb8a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5ace3793cfd03f1823a77e7a45b4e07351f8977916a66a1932b465f6cb8a38->enter($__internal_fe5ace3793cfd03f1823a77e7a45b4e07351f8977916a66a1932b465f6cb8a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5993177e45fcfcd22c51162f9797984c353fa95d80ef962ed77436a5284c3bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5993177e45fcfcd22c51162f9797984c353fa95d80ef962ed77436a5284c3bde->enter($__internal_5993177e45fcfcd22c51162f9797984c353fa95d80ef962ed77436a5284c3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe5ace3793cfd03f1823a77e7a45b4e07351f8977916a66a1932b465f6cb8a38->leave($__internal_fe5ace3793cfd03f1823a77e7a45b4e07351f8977916a66a1932b465f6cb8a38_prof);

        
        $__internal_5993177e45fcfcd22c51162f9797984c353fa95d80ef962ed77436a5284c3bde->leave($__internal_5993177e45fcfcd22c51162f9797984c353fa95d80ef962ed77436a5284c3bde_prof);

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
