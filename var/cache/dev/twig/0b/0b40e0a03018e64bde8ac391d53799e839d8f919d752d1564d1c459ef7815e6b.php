<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_566a3a984e769d5508da6a0fcfad072462d2a8a3288346f99b100dc3ece2f8cb extends Twig_Template
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
        $__internal_c389b9915d8039d5da499692dc473231fd326ddd1381771828766cb2eb5a2ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c389b9915d8039d5da499692dc473231fd326ddd1381771828766cb2eb5a2ce5->enter($__internal_c389b9915d8039d5da499692dc473231fd326ddd1381771828766cb2eb5a2ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_57fe8f461ec7e00c1c8ec4f76a7ae11d63f375d389cd3b277d61b62c59b55150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fe8f461ec7e00c1c8ec4f76a7ae11d63f375d389cd3b277d61b62c59b55150->enter($__internal_57fe8f461ec7e00c1c8ec4f76a7ae11d63f375d389cd3b277d61b62c59b55150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c389b9915d8039d5da499692dc473231fd326ddd1381771828766cb2eb5a2ce5->leave($__internal_c389b9915d8039d5da499692dc473231fd326ddd1381771828766cb2eb5a2ce5_prof);

        
        $__internal_57fe8f461ec7e00c1c8ec4f76a7ae11d63f375d389cd3b277d61b62c59b55150->leave($__internal_57fe8f461ec7e00c1c8ec4f76a7ae11d63f375d389cd3b277d61b62c59b55150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
