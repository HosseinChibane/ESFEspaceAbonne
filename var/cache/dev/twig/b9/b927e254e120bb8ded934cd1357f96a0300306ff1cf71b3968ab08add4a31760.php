<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_24cefa2f7095af2c97706fb18b9bea7e4d4b221bf72c5c5b08b950119100f9bc extends Twig_Template
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
        $__internal_3a6be351eb1b2e2d75c3ed62a8013bb8dcf744b66077adf99404c89992dcfe21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6be351eb1b2e2d75c3ed62a8013bb8dcf744b66077adf99404c89992dcfe21->enter($__internal_3a6be351eb1b2e2d75c3ed62a8013bb8dcf744b66077adf99404c89992dcfe21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bcc50653cf173e99ce4350a0515243ddb2b41d512706cf3cdde21353d3881012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc50653cf173e99ce4350a0515243ddb2b41d512706cf3cdde21353d3881012->enter($__internal_bcc50653cf173e99ce4350a0515243ddb2b41d512706cf3cdde21353d3881012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3a6be351eb1b2e2d75c3ed62a8013bb8dcf744b66077adf99404c89992dcfe21->leave($__internal_3a6be351eb1b2e2d75c3ed62a8013bb8dcf744b66077adf99404c89992dcfe21_prof);

        
        $__internal_bcc50653cf173e99ce4350a0515243ddb2b41d512706cf3cdde21353d3881012->leave($__internal_bcc50653cf173e99ce4350a0515243ddb2b41d512706cf3cdde21353d3881012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
