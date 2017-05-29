<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b7b7f28eb197315dda2c71a4e3352233258b35d9d09f523e91ea93917e06da2a extends Twig_Template
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
        $__internal_6fe68d31967b04a7aeec2b8ac5b752e933d08adaf8b45c3a71354f2131d6136c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe68d31967b04a7aeec2b8ac5b752e933d08adaf8b45c3a71354f2131d6136c->enter($__internal_6fe68d31967b04a7aeec2b8ac5b752e933d08adaf8b45c3a71354f2131d6136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_812845824c6378ff8f8cab642aced51bf95384e44d68276ada78ff1f6d5cb2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812845824c6378ff8f8cab642aced51bf95384e44d68276ada78ff1f6d5cb2de->enter($__internal_812845824c6378ff8f8cab642aced51bf95384e44d68276ada78ff1f6d5cb2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6fe68d31967b04a7aeec2b8ac5b752e933d08adaf8b45c3a71354f2131d6136c->leave($__internal_6fe68d31967b04a7aeec2b8ac5b752e933d08adaf8b45c3a71354f2131d6136c_prof);

        
        $__internal_812845824c6378ff8f8cab642aced51bf95384e44d68276ada78ff1f6d5cb2de->leave($__internal_812845824c6378ff8f8cab642aced51bf95384e44d68276ada78ff1f6d5cb2de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
