<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c0e49d31098a3012f5f3c2cd4d00daff5478da1793b49d1685292e683339fcef extends Twig_Template
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
        $__internal_c063bdee671c5a957ab7a6e52481ec44864f7cea4a702ffa4e427ca5845ea9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c063bdee671c5a957ab7a6e52481ec44864f7cea4a702ffa4e427ca5845ea9ef->enter($__internal_c063bdee671c5a957ab7a6e52481ec44864f7cea4a702ffa4e427ca5845ea9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_87fd8f12ba754d704f79df7f5c44cbd2732b68969580076a73b5c0528e8e1cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fd8f12ba754d704f79df7f5c44cbd2732b68969580076a73b5c0528e8e1cbd->enter($__internal_87fd8f12ba754d704f79df7f5c44cbd2732b68969580076a73b5c0528e8e1cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c063bdee671c5a957ab7a6e52481ec44864f7cea4a702ffa4e427ca5845ea9ef->leave($__internal_c063bdee671c5a957ab7a6e52481ec44864f7cea4a702ffa4e427ca5845ea9ef_prof);

        
        $__internal_87fd8f12ba754d704f79df7f5c44cbd2732b68969580076a73b5c0528e8e1cbd->leave($__internal_87fd8f12ba754d704f79df7f5c44cbd2732b68969580076a73b5c0528e8e1cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
