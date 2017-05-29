<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9d6d347575b2b64a7405a1c4518e6f518f3e3d21b589b065f2eb8fe9e2848b55 extends Twig_Template
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
        $__internal_ff9bd0db7012b98642d728f9037f5840088ad8c3596672e42bd5104d61a572dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9bd0db7012b98642d728f9037f5840088ad8c3596672e42bd5104d61a572dc->enter($__internal_ff9bd0db7012b98642d728f9037f5840088ad8c3596672e42bd5104d61a572dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6eef4ba8bae1fde5bb9bf409125f3e56fda25ea806542854769154c4cce9b803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eef4ba8bae1fde5bb9bf409125f3e56fda25ea806542854769154c4cce9b803->enter($__internal_6eef4ba8bae1fde5bb9bf409125f3e56fda25ea806542854769154c4cce9b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ff9bd0db7012b98642d728f9037f5840088ad8c3596672e42bd5104d61a572dc->leave($__internal_ff9bd0db7012b98642d728f9037f5840088ad8c3596672e42bd5104d61a572dc_prof);

        
        $__internal_6eef4ba8bae1fde5bb9bf409125f3e56fda25ea806542854769154c4cce9b803->leave($__internal_6eef4ba8bae1fde5bb9bf409125f3e56fda25ea806542854769154c4cce9b803_prof);

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
