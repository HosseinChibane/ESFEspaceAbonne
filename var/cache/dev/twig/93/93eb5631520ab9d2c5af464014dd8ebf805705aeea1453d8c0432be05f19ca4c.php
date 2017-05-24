<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a1edf54c327e9bb3e0607bf236863e55ccff765c88bb9ebb0222a0f226f4f7b2 extends Twig_Template
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
        $__internal_d28956370df41b2c0c39df6f74f578407135e163fab56485e3c21b8a7f48e590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28956370df41b2c0c39df6f74f578407135e163fab56485e3c21b8a7f48e590->enter($__internal_d28956370df41b2c0c39df6f74f578407135e163fab56485e3c21b8a7f48e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6557e2dfd5b639a203a84d2b43068088c08f31da1a238dbb52c7c8972e58b67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6557e2dfd5b639a203a84d2b43068088c08f31da1a238dbb52c7c8972e58b67e->enter($__internal_6557e2dfd5b639a203a84d2b43068088c08f31da1a238dbb52c7c8972e58b67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d28956370df41b2c0c39df6f74f578407135e163fab56485e3c21b8a7f48e590->leave($__internal_d28956370df41b2c0c39df6f74f578407135e163fab56485e3c21b8a7f48e590_prof);

        
        $__internal_6557e2dfd5b639a203a84d2b43068088c08f31da1a238dbb52c7c8972e58b67e->leave($__internal_6557e2dfd5b639a203a84d2b43068088c08f31da1a238dbb52c7c8972e58b67e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
