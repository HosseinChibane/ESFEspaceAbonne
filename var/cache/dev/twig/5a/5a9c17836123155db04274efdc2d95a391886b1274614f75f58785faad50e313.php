<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_21a0cbdeab8715e317fabb8645e397d971b2717d8f777c7ab3d801275cbb3062 extends Twig_Template
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
        $__internal_62b51ddd0ed0646d4e8bfc0afe8afb41121ce056b4300f30208560960987a411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b51ddd0ed0646d4e8bfc0afe8afb41121ce056b4300f30208560960987a411->enter($__internal_62b51ddd0ed0646d4e8bfc0afe8afb41121ce056b4300f30208560960987a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cfd5ca1e4c2a1407781eb6a69c93dd8e448f3b3d9c7f0e5fb699c2f4d98312ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd5ca1e4c2a1407781eb6a69c93dd8e448f3b3d9c7f0e5fb699c2f4d98312ec->enter($__internal_cfd5ca1e4c2a1407781eb6a69c93dd8e448f3b3d9c7f0e5fb699c2f4d98312ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_62b51ddd0ed0646d4e8bfc0afe8afb41121ce056b4300f30208560960987a411->leave($__internal_62b51ddd0ed0646d4e8bfc0afe8afb41121ce056b4300f30208560960987a411_prof);

        
        $__internal_cfd5ca1e4c2a1407781eb6a69c93dd8e448f3b3d9c7f0e5fb699c2f4d98312ec->leave($__internal_cfd5ca1e4c2a1407781eb6a69c93dd8e448f3b3d9c7f0e5fb699c2f4d98312ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
