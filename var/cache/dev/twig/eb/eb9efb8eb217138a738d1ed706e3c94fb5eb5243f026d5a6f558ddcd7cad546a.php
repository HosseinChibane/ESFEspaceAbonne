<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f6ea95b944a974cb191ac385e051656060dc5573dd4dc6186f945919f410da12 extends Twig_Template
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
        $__internal_ef269251cf40c666976830073b1faa3fa99434853a91cb1674205e9fe153326d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef269251cf40c666976830073b1faa3fa99434853a91cb1674205e9fe153326d->enter($__internal_ef269251cf40c666976830073b1faa3fa99434853a91cb1674205e9fe153326d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ff6f853cbdbc3ee882453b889b6009bfef68794d51adbf91213a0da27ce43ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6f853cbdbc3ee882453b889b6009bfef68794d51adbf91213a0da27ce43ebd->enter($__internal_ff6f853cbdbc3ee882453b889b6009bfef68794d51adbf91213a0da27ce43ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ef269251cf40c666976830073b1faa3fa99434853a91cb1674205e9fe153326d->leave($__internal_ef269251cf40c666976830073b1faa3fa99434853a91cb1674205e9fe153326d_prof);

        
        $__internal_ff6f853cbdbc3ee882453b889b6009bfef68794d51adbf91213a0da27ce43ebd->leave($__internal_ff6f853cbdbc3ee882453b889b6009bfef68794d51adbf91213a0da27ce43ebd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
