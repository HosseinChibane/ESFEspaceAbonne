<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_abbb05994de3b47e78286e06338d08a20b0ed6b44267d88205319df291cd9e46 extends Twig_Template
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
        $__internal_9b7b743db5b5a25db52ca914f70aaa836af8bcfe71e21bed5985dbdadaa01270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7b743db5b5a25db52ca914f70aaa836af8bcfe71e21bed5985dbdadaa01270->enter($__internal_9b7b743db5b5a25db52ca914f70aaa836af8bcfe71e21bed5985dbdadaa01270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6238566bd700ee5d33628eded00d5a10a68ffaafbc15b3cee24f523e086d2304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6238566bd700ee5d33628eded00d5a10a68ffaafbc15b3cee24f523e086d2304->enter($__internal_6238566bd700ee5d33628eded00d5a10a68ffaafbc15b3cee24f523e086d2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9b7b743db5b5a25db52ca914f70aaa836af8bcfe71e21bed5985dbdadaa01270->leave($__internal_9b7b743db5b5a25db52ca914f70aaa836af8bcfe71e21bed5985dbdadaa01270_prof);

        
        $__internal_6238566bd700ee5d33628eded00d5a10a68ffaafbc15b3cee24f523e086d2304->leave($__internal_6238566bd700ee5d33628eded00d5a10a68ffaafbc15b3cee24f523e086d2304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
