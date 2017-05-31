<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4c36caa496ea4d5b3a670a4a6db11775cdb05530be57534cf29e179c6acb3f89 extends Twig_Template
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
        $__internal_c21437e87fb6af2bdae60eefe47b10a9bfeeaaf7a7546ee9064b4f27b4c4beed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21437e87fb6af2bdae60eefe47b10a9bfeeaaf7a7546ee9064b4f27b4c4beed->enter($__internal_c21437e87fb6af2bdae60eefe47b10a9bfeeaaf7a7546ee9064b4f27b4c4beed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_509d86c3767c5ded6c7cd9c9aa479f7e59ab1a0c872a353478f4a2006958f011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509d86c3767c5ded6c7cd9c9aa479f7e59ab1a0c872a353478f4a2006958f011->enter($__internal_509d86c3767c5ded6c7cd9c9aa479f7e59ab1a0c872a353478f4a2006958f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c21437e87fb6af2bdae60eefe47b10a9bfeeaaf7a7546ee9064b4f27b4c4beed->leave($__internal_c21437e87fb6af2bdae60eefe47b10a9bfeeaaf7a7546ee9064b4f27b4c4beed_prof);

        
        $__internal_509d86c3767c5ded6c7cd9c9aa479f7e59ab1a0c872a353478f4a2006958f011->leave($__internal_509d86c3767c5ded6c7cd9c9aa479f7e59ab1a0c872a353478f4a2006958f011_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
