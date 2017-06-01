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
        $__internal_de307e24710014bf9b8169ee8738778757f5c5a606a069582840ef9a7b3cdec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de307e24710014bf9b8169ee8738778757f5c5a606a069582840ef9a7b3cdec2->enter($__internal_de307e24710014bf9b8169ee8738778757f5c5a606a069582840ef9a7b3cdec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1b78c8478c49de0c71eb8be9d692cf99b853c4728ca7e89f24a9b3965c806122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b78c8478c49de0c71eb8be9d692cf99b853c4728ca7e89f24a9b3965c806122->enter($__internal_1b78c8478c49de0c71eb8be9d692cf99b853c4728ca7e89f24a9b3965c806122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_de307e24710014bf9b8169ee8738778757f5c5a606a069582840ef9a7b3cdec2->leave($__internal_de307e24710014bf9b8169ee8738778757f5c5a606a069582840ef9a7b3cdec2_prof);

        
        $__internal_1b78c8478c49de0c71eb8be9d692cf99b853c4728ca7e89f24a9b3965c806122->leave($__internal_1b78c8478c49de0c71eb8be9d692cf99b853c4728ca7e89f24a9b3965c806122_prof);

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
