<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6716c4dfec09a59d8831e012a34a4cc3f7327e82da36e38416b69db277814ac1 extends Twig_Template
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
        $__internal_441767e0a42fa43a634a5fc4d520bd1beba0793909867820fb043ec80fa5d73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441767e0a42fa43a634a5fc4d520bd1beba0793909867820fb043ec80fa5d73e->enter($__internal_441767e0a42fa43a634a5fc4d520bd1beba0793909867820fb043ec80fa5d73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bd1aa00ddcd780d5fd2b12bdb47e0bc6b1bc8f3a9ec8ef01d0b0d8aa79078711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1aa00ddcd780d5fd2b12bdb47e0bc6b1bc8f3a9ec8ef01d0b0d8aa79078711->enter($__internal_bd1aa00ddcd780d5fd2b12bdb47e0bc6b1bc8f3a9ec8ef01d0b0d8aa79078711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_441767e0a42fa43a634a5fc4d520bd1beba0793909867820fb043ec80fa5d73e->leave($__internal_441767e0a42fa43a634a5fc4d520bd1beba0793909867820fb043ec80fa5d73e_prof);

        
        $__internal_bd1aa00ddcd780d5fd2b12bdb47e0bc6b1bc8f3a9ec8ef01d0b0d8aa79078711->leave($__internal_bd1aa00ddcd780d5fd2b12bdb47e0bc6b1bc8f3a9ec8ef01d0b0d8aa79078711_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
